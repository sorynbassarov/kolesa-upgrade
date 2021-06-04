<?php
use Page\Acceptance\LoginPage;
use Page\Acceptance\SearchPage;
use Page\Acceptance\DressPage;
use Page\Acceptance\SummerPage;
use Codeception\Util\Locator;

/**
     * Класс для проверки авторизации
     */
    
class CheckFunctionalityCest
{

   
    public function SearchElements(AcceptanceTester $I)
    {
        $searchPage = new SearchPage($I);
        $dressPage = new DressPage($I);
        $summerPage = new SummerPage($I);
        $I->amOnPage(SearchPage::$URL);
        $I->waitForText('Call us now: ',5,SearchPage::$TitleBlock);
        $searchPage->clickDressButton();
        $I->amOnPage(DressPage::$URL);
        $I->waitForText('Dresses',5,DressPage::$DressCheck);
        $dressPage->clickSummerDressButton();
        $I->amOnPage(DressPage::$URL);
        //$I->waitForText('Summer Dresses',5,SummerPage::$SummerCheck);

        $summerPage->clickListButton();
        $I->WaitForElement(SummerPage::$ListText);
        
       
        
    }


    // tests

}
