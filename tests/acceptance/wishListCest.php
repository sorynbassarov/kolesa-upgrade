<?php
use Page\Acceptance\SignInPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\WishListPage;
use Page\Acceptance\AccountPage;
/**
 * класс для проверки уишлиста
 */
class wishListCest{
    public const PRODUCTS_NMB = 2;

    protected function getRegister(\AcceptanceTester $I){
        $signInPage = new SignInPage($I);
        $I->amOnPage(SignInPage::$url);
        $I->click(SignInPage::$login);
        $I->waitForElementVisible(SignInPage::$registeredText);
        $signInPage->SignIn();
        
    }
    
    /**
     * Добавляет товары в вишлист
     * @group test6
     * 
     * @before getRegister
     */
     public function checkingWishList(\Step\Acceptance\WishListStep $I){
        $I->amOnPage(MainPage::$url);
        $I->addingCardToWishList();
        $I->click(MainPage::$myAccount);    
        $I->seeInCurrentUrl(AccountPage::$myAccountUrl);
        $I->click(AccountPage::$mywishList);
        $I->seeInCurrentUrl(AccountPage::$myAccountUrl);

        $I->assertEquals($wishlistPage->getQty(), self::PRODUCTS_NMB, "Проверяем");


    }
    /**
     * 
     * @after getClearEverything
     */
    protected function getClearEverything(\AcceptanceTester $I){
        $wishlistpage = new WishListPage($I);
        $wishlistpage->clearWishlist();

        $signinpage = new SignInPage($I);
        $signinpage->logout();
    }
}
