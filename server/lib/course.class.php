<?php

use Stalker\Lib\Core\Mysql;
use Stalker\Lib\Core\Config;
use Stalker\Lib\Course\ProviderFactory;
use Stalker\Lib\Course\CourseGetter;

class Course implements \Stalker\Lib\StbApi\Course
{

    /**
     * @var
     */
    private $db;

    /**
     * @var string
     */
    private $codes;

    /**
     * @var string
     */
    private $providerName;

    public function __construct()
    {
        $this->db = Mysql::getInstance();
        $this->providerName = Config::get('course_provider');

        $providers = Config::get('course_providers_for_update');
        if (array_key_exists($this->providerName, $providers)) {
            $this->codes = $providers[$this->providerName];
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getData()
    {
        $provider = ProviderFactory::build($this->providerName, [$this->codes, $this->db]);

        if ($provider instanceof CourseGetter) {
            return $provider->getData();
        }

        throw new \Exception(sprintf('Class "%s" must implement CourseGetter interface',  get_class($provider)));
    }

}
