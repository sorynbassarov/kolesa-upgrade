<?php
namespace Step\Acceptance;
use Page\Acceptance\ProductsPage;
use Page\Acceptance\ShoppingListPage;

class ShoppingStep extends \AcceptanceTester
{
    public const PRODUCTS_NMB = 3;   
    public function addProductToCard(){
        $I = $this;

        for($i = 1; $i<=self::PRODUCTS_NMB; $i++){
            
            $I->moveMouseOver(sprintf(ProductsPage::$addToCartButton, $i));
            $I->click(sprintf(ProductsPage::$addToCartButton, $i));
            $I->waitForElementVisible(ProductsPage::$addSuccessModal);
            $I->wait(5);
            $I->waitForText(ProductsPage::$successMessage);
            $I->click(ProductsPage::$goBackShoppingButton);
        }

            $I->click(ProductsPage::$cartListButton);    
            $I->seeInCurrentUrl(ShoppingListPage::$ordersUrl);

        for($i = 1; $i<=self::PRODUCTS_NMB; $i++){
            $I->waitForElementVisible(ShoppingListPage::getOrderSelectorByIndex($i));
        }

    }
}