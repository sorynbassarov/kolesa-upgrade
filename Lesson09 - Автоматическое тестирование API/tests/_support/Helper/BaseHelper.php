<?php
namespace Helper;
use Faker\Factory;
use FunctionalTester;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class BaseHelper extends \Codeception\Module
{
    /**
    * init Faker function in one place
    * @param $locale
    */
    public function getFaker($locale = 'en_US')
    {
        $faker = Factory::create($locale);

        return $faker;
    }

}
