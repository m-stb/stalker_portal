<?php

namespace W6\Service\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ImagineServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        if (class_exists('\Gmagick')) {
            $app['imagine.driver'] = 'Gmagick';
        } elseif (class_exists('\Imagick')) {
            $app['imagine.driver'] = 'Imagick';
        } else {
            $app['imagine.driver'] = 'Gd';
        }

        $classname = sprintf('Imagine\%s\Imagine', $app['imagine.driver']);
        
        $app['imagine'] = new $classname;
    }
}
