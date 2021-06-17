<?php
use Page\Acceptance\MainMarketPage;

/**
 * Класс для проверки поика по категории
 */
class categorySearchCest{
    
    /**
     * метод который выполняется перед каждым тестом
    */
    protected function setRegionCoockie(\AcceptanceTester $I){
        $I->amOnPage(MainMarketPage::$url);
        $I->setCookie('regAutoToggle', '1');
        $I->reloadPage();
    }
    
    /**
     * Проверяет категорию работа в поиске
     * @group test4
     * 
     * @before setRegionCoockie
     */
    public function checkJobCategory(\AcceptanceTester $I){
        $mainMarketPage = new MainMarketPage($I);
        $I->waitForElementVisible(MainMarketPage::$workCategoryIcon);
        $mainMarketPage->clickWorkCategoryIcon();
        $mainMarketPage->checkingUrlOfWork();
    }
     
    /**
     * Проверяет категорию недвижимость в поиске
     * @before setRegionCoockie
     */
    public function checkPropertyCategory(\AcceptanceTester $I){
        $mainMarketPage = new MainMarketPage($I);
        $I->waitForElementVisible(MainMarketPage::$propertyCategoryIcon);
        $mainMarketPage->clickPropertyCategoryIcon();
        $mainMarketPage->checkingUrlOfProperty();
    }


    // tests
    // public function tryToTest(AcceptanceTester $I)
    // {
    // }
}
