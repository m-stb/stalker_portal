<?php
/**
 * Created by PhpStorm.
 * User: vlas
 * Date: 21.08.18
 * Time: 10:17
 */

namespace Stalker\Lib\Course;


class CourseComparator
{

    /**
     * Different between two first items
     *
     * @param $item
     * @return float|int
     */
    public static function Diff($item)
    {
        if (count($item) < 2) {
            return 0;
        }

        return round($item[0]['value'] - $item[1]['value'], 4);
    }

    /**
     * @param $diff
     * @return int
     */
    public static function Trend($diff)
    {
        if ($diff > 0) {
            return 1;
        }
        if ($diff < 0) {
            return -1;
        }
        return 0;
    }
}