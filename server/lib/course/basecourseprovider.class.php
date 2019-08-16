<?php
/**
 * Created by PhpStorm.
 * User: vlas
 * Date: 15.08.18
 * Time: 12:28
 */

namespace Stalker\Lib\Course;

abstract class BaseCourseProvider implements CourseGetter, CourseUpdater
{
    // private in php71
    const TABLE_NAME = 'course_cache';
    const TITLE_DATE_FORMAT = 'd.m.Y';
    const MAX_SAVING_DAYS = 10;

    /**
     * Title for widget
     *
     * @var string
     */
    protected $title;

    /**
     * Provider's identifier
     *
     * @var string $provider
     */
    protected $provider;

    /**
     * list of currencies's identifiers
     *
     * @var array $codes
     */
    protected $codes = [];

    /**
     *  DB instance
     * @var
     */
    private $db;

    /**
     * Data for saving
     * @var array
     */
    private $data;

    /**
     * BaseCourseProvider constructor.
     * @param string $codes
     * @param $db
     */
    public function __construct($codes, $db)
    {
        $this->codes = array_map('trim', explode(',', $codes));
        $this->db = $db;
        $this->title = _('Exchange rate on');
    }

    /**
     * @return array
     */
    public function getData()
    {
        $rez = $this->db
            ->select(['provider', 'exchange_date', 'code', 'currency', 'nominal', 'value', 'updated'])
            ->from(self::TABLE_NAME)
            ->where('provider', '=', $this->provider)
            ->in('code', $this->codes)
            ->orderBy('updated')
            ->get()->all();

        $data = [];
        $onDate = '0001-00-00';
        foreach ($rez as $item) {
            $data[$item['code']][] = $item;
            $onDate = $item['exchange_date'] < $onDate ? $onDate : $item['exchange_date'];
        }

        $date = \DateTime::createFromFormat('Y-m-d', $onDate);
        return [
            'title' => $this->title . ' ' . $date->format(self::TITLE_DATE_FORMAT),
//            'on_date' => $date,
            'data' => $this->analyse($data),
        ];
    }

    /**
     * @return array
     */
    public function updateData()
    {
        $this->data = $this->parseData();
        $inserted = $this->saveData();
        $removed = $this->clearOldData();

        return compact('inserted', 'removed');
    }

    /**
     * Get and decode data in DB format
     *
     * @return array
     */
    abstract protected function parseData();

    /**
     * Save data in $this->data to DB
     */
    private function saveData()
    {
        $add = [
            'provider' => $this->provider,
            'updated' => date('Y-m-d H:i:s'),
        ];

        foreach ($this->data as $record) {
            $this->db->insert(self::TABLE_NAME, array_merge($add, $record));
        }

        return count($this->data);
    }

    /**
     * remove old data from DB
     */
    private function clearOldData()
    {
        $sql = sprintf(
            "delete from %s where provider = '%s' and updated<DATE_SUB(NOW(), INTERVAL %d DAY)",
            self::TABLE_NAME, $this->provider, self::MAX_SAVING_DAYS);

        $count = 0;
//        $this->db->delete(self::TABLE_NAME, [
//            'provider' => $this->provider,
//            'updated<' => 'DATE_SUB(NOW(), INTERVAL 3 DAY)',
//        ]);

        $this->db->query($sql);

        return $count;
    }

    /**
     * @param array $data
     * @return array
     */
    private function analyse(array $data)
    {
        foreach ($data as &$item) {
            usort($item, function ($a, $b) {
                if ($a['exchange_date'] == $b['exchange_date']) {
                    return 0;
                }
                return ($a['exchange_date'] > $b['exchange_date']) ? -1 : 1;
            });
        }

        $data2 = [];
        foreach ($data as $record) {
            $diff = CourseComparator::Diff($record);
            $trend = CourseComparator::Trend($diff);
            $data2[] = [
                'code' => $record[0]['code'],
                'currency' => $record[0]['nominal'] . ' ' . $record[0]['currency'],
                'value' => $record[0]['value'] + 0,
                'diff' => ($trend > 0 ? '&nbsp;' : '') . sprintf('%.4f', $diff),
                'trend' => $trend,
            ];
        }

        return $data2;
    }

}
