<?php
/**
 * Created by PhpStorm.
 * User: vlas
 * Date: 16.08.18
 * Time: 15:37
 */

namespace Stalker\Lib\Course;

class CbrProvider extends BaseCourseProvider
{
    const API_URL = 'http://www.cbr.ru/scripts/XML_daily.asp';

    /**
     * CbrProvider constructor.
     * @param $codes
     * @param $db
     */
    public function __construct($codes, $db)
    {
        parent::__construct($codes, $db);
        $this->provider = 'cbr';
        $this->title = _('CBR exchange rate on');
    }

    /**
     * Get and decode data in DB format
     *
     * @return array
     */
    protected function parseData()
    {
        $context = stream_context_create(['http' => ['max_redirects' => 101]]);
        $content = file_get_contents(self::API_URL, false, $context);
        if (!$content) {
            return [];
        }

        $xml = \simplexml_load_string($content);
        $attr = $xml->attributes();

        $rez = [];
        foreach ($xml as $item) {
            if (in_array((string)$item->NumCode, $this->codes)) {
                $dt = \DateTime::createFromFormat('d.m.Y', (string)$attr['Date']);
                $rez[] = [
                    'code' => (string)$item->NumCode,
                    'nominal' => (int)$item->Nominal,
                    'currency' => (string)$item->CharCode,
                    'value' => (real)str_replace(',', '.', $item->Value),
                    'exchange_date' => $dt->format('Y-m-d'),
                ];
            }
        }

        return $rez;
    }
}
