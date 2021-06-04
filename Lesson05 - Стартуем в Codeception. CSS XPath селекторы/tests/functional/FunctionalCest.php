<?php

class FunctionalCest
{
    // tests
    public function searchPrintedDress(FunctionalTester $I)
    {

        $searchCSS = '#search_query_top';
        $searchXPATH = '//input[@id="search_query_top"]';
        $searchButtonCSS = '#searchbox > button';
        $searchButtonXPATH = '//*[@id="searchbox"]/button[1]';
        $containerCSS = 'ul.product_list .product-container';
        $containerXPATH = '//div[@class="product-container"]';

        $I->amOnPage('');
        $I->seeElement($searchCSS);
        $I->click($searchCSS);
        $I->fillField($searchCSS, "Printed Dress");
        $I->click($searchButtonCSS);
        $I->seeNumberOfElements($containerCSS, '5');

       

    }
}