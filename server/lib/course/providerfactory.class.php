<?php
/**
 * Created by PhpStorm.
 * User: vlas
 * Date: 17.08.18
 * Time: 11:58
 */

namespace Stalker\Lib\Course;


class ProviderFactory
{
    const PROVIDER_NAMESPACE = 'Stalker\\Lib\\Course\\';

    /**
     * @param string $name
     * @param array $options
     * @return \Stalker\Lib\Course\CourseGetter|\Stalker\Lib\Course\CourseUpdater
     */
    static public function build($name, array $options)
    {
        $className = self::PROVIDER_NAMESPACE . ucfirst($name) . 'Provider';
        return new $className($options[0], $options[1]);
    }
}