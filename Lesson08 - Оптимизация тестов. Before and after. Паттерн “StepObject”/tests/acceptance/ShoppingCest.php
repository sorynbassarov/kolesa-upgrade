<?php
use Page\Acceptance\ProductsPage;
use Page\Acceptance\ShoppingListPage;

/**
 * Класс для добавление товаров в корзину
 */
class ShoppingCest{

     public const PRODUCTS_NMB = 3;

    /**
     * Проверка общей суммы заказа  
     * @group test5
     */
    public function checkTotalAmount(\AcceptanceTester $I){
        $productsPage = new ProductsPage($I);
        $I->amOnPage(ProductsPage::$dressesUrl);
        $productsPage->checkFirstCards();
        
        $I->comment('Добавляю товары в корзину');

        for($i = 1; $i<=self::PRODUCTS_NMB; $i++){
            $I->moveMouseOver(sprintf(ProductsPage::$addToCartButton, $i));
            //$I->wait(10);
            $I->click(sprintf(ProductsPage::$addToCartButton, $i));
            //$I->wait(10);
            $I->waitForElementVisible(ProductsPage::$addSuccessModal);
            //$I->wait(10);
            //$I->waitForText(ProductsPage::$successMessage);
            $I->wait(10);
            $I->click(ProductsPage::$goBackShoppingButton);
        }
        $I->click(ProductsPage::$cartListButton);    
        $I->seeInCurrentUrl(ShoppingListPage::$ordersUrl);

        for($i = 1; $i<=self::PRODUCTS_NMB; $i++){
            $I->waitForElementNotVisible(ShoppingListPage::getOrderSelectorByIndex($i));
        }

        $sum = 0;
        $totalSum = preq_replace('/[$]/','',$I->grabTextFrom(ShoppingListPage::$totalSum));
        
        for($i = 1; $i<=self::PRODUCTS_NMB; $i++){
            $price = preq_replace('/[$]/','',$I->grabTextFrom(ShoppingListPage::getOrderPriceByIndex($i)));
            $sum += $price;
        }

        $I->assertEquals($totalSum, $sum, 'Checks that total sum is correct');

    }
}