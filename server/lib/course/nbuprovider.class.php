<?php
/**
 * Created by PhpStorm.
 * User: vlas
 * Date: 15.08.18
 * Time: 12:31
 */

namespace Stalker\Lib\Course;

class NbuProvider extends BaseCourseProvider
{
    const API_URL = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json';

    /**
     * NbuProvider constructor.
     * @param string $codes
     * @param $db
     */
    public function __construct($codes, $db)
    {
        parent::__construct($codes, $db);
        $this->provider = 'nbu';
        $this->title = _('NBU exchange rate on');
    }

    /**
     * remap array and filter for currencies in the $codes
     *
     * @param array $data
     * @param array $codes
     * @return array
     */
    private function extractCurrencies(array $data, array $codes)
    {
        $rez = [];
        foreach ($data as $item) {
            if (in_array($item['r030'], $codes)) {
                $date = \DateTime::createFromFormat('d.m.Y', $item['exchangedate']);
                $rez[] = [
                    'code' => $item['r030'],
                    'currency' => $item['cc'],
                    'value' => $item['rate'],
                    'exchange_date' => $date->format('Y-m-d'),
                ];
            }
        }

        return $rez;
    }

    /**
     * Get and decode data
     *
     * @return array
     */
    protected function parseData()
    {
        $content = file_get_contents(self::API_URL);
        if (!$content) {
            return [];
        }

        $apiData = \json_decode($content, true);

        return $this->extractCurrencies($apiData, $this->codes);
    }
}
