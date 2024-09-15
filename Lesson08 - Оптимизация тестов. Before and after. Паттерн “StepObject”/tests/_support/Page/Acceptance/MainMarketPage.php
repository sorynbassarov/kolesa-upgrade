<?php
namespace Page\Acceptance;

/**
 * class with elements and methods on MainPage
 */
class MainMarketPage
{
    /***
     * урл главной страницы
     */
    public static $url = '';
    
    /**
     * Селектор иконки категории работа
     */
    public static $workCategoryIcon = '//span[contains(@class,"rabota")]';

        /**
     * Селектор иконки категории работа
     */
    public static $propertyCategoryIcon = '//span[contains(@class,"nedvizhimost")]';

    /**
     * селктор блока с геолокацией
     */
    public static $geoLocationBlock = '//div[contains(@class,"region-auto modal")]';

    /**
     * кнопка подтверждения выбора геолокции
     */
    public static $confirmGeoButton = '//div[contains(@class,"confirm")]/a[@data-confirm="1"]';

      /**
      * объект тестера А
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;
    /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I){
        $this->acceptanceTester = $I;
    }

    /**
     * Кликаем на работу
     */
    public function clickWorkCategoryIcon(){
        $this->acceptanceTester->click(self::$workCategoryIcon);
    }
    
    /**
     * чекаем урл
     */
    public function checkingUrlOfWork(){
        $this->acceptanceTester->seeCurrentUrlEquals('/rabota/');
    }
    
    /**
     * Кликаем по категории недвижимости
     */
    public function clickPropertyCategoryIcon(){
        $this->acceptanceTester->click(self::$propertyCategoryIcon);
    }
   
    /**
     * Чекаем Урл недвижимости
     */
    public function checkingUrlOfProperty(){
        $this->acceptanceTester->seeCurrentUrlEquals('/nedvizhimost/');
    }
   
}
