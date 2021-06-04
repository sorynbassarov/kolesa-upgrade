<?php
use Page\Acceptance\MainPage;

class FirstCest
{
    public function RealizationTest(AcceptanceTester $I)
    {
        $mainPage = new MainPage($I);
        $I->amOnPage(MainPage::$URL);
        $I->waitForText('Call us now: ',5,MainPage::$TitleBlockCSS);
        $mainPage->scroll();
        $mainPage->mouseMove();
        $I->waitForElementVisible(MainPage::$QuickViewCSS);
        $mainPage->clickQuickView();
        $I->waitForText('Blouse',5,MainPage::$BlouseCheckCSS);

      
    }

    // tests
    
}
