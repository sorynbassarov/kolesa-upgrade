<?php
namespace Step\Acceptance;
use Page\Acceptance\MainPage;
use Page\Acceptance\SignInPage;
use Page\Acceptance\AccountPage;

class WishListStep extends \AcceptanceTester
{
    public const PRODUCTS_NMB = 2;   
    public function addingCardToWishList(){
        $I = $this;

        for($i = 1; $i<=self::PRODUCTS_NMB; $i++){
            $I->waitForElement(sprintf(MainPage::$productsCard, $i));
            $I->moveMouseOver(sprintf(MainPage::$productsCard, $i));
            $I->waitForElementClickable(sprintf(MainPage::$quickView, $i));
            $I->Click(sprintf(MainPage::$quickView, $i));
            $I->wait(5);
            $I->switchToIFrame(MainPage::$Iframe);
            $I->waitForElementVisible(MainPage::$wishList);
            $I->wait(5);
            $I->click(MainPage::$wishList);
            $I->click(MainPage::$closeWishList);
            
        }
    }

}