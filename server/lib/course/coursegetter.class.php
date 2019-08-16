<?php
/**
 * Created by PhpStorm.
 * User: vlas
 * Date: 16.08.18
 * Time: 15:01
 */

namespace Stalker\Lib\Course;

interface CourseGetter
{
    /**
     * return data for stb
     *
     * @return array
     */
    function getData();
}