<?php
namespace Helper;
use Faker\Provider\Base;


class CustomFakerProvider extends Base
{
    protected $phoneCodes = [
        '701',
        '702',
        '775',
        '778'
    ];
    protected $cardCodes = [
        '5169',
        '5578',
        '4003',
        '4899'
    ];
    /**
     * Этот метод возваращает рандомный казасхтански номер
     */
    public function getPhoneKZ()
    {
        return sprintf(
            '7%d%d%dD',
            $this->phoneCodes[array_rand($this->phoneCodes)],
            random_int(100,999),
            random_int(10,99),
            random_int(10,99)
        );
    }
    public function getCard()
    {
        return sprintf(
            ' %d %d %d %d %d',
            $this->cardCodes[array_rand($this->cardCodes)],
            random_int(100,999),
            random_int(100,999),
            random_int(100,999),
            random_int(100,999)
        );
    }
    public function getSecureCode()
    {
        return sprintf(
            '%d',
            //$this->$cardCodes[array_rand($this->cardCodes)],
            random_int(100,999)
        );
    }
   

}
//4003423236391
