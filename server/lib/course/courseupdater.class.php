<?php
/**
 * Created by PhpStorm.
 * User: vlas
 * Date: 16.08.18
 * Time: 15:02
 */

namespace Stalker\Lib\Course;

interface CourseUpdater
{
    /**
     * Update data and save it to DB
     *
     * @return array
     */
    function updateData();
}