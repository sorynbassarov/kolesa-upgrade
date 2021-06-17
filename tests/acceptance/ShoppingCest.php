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
    public function checkTotalAmount(\Step\Acceptance\ShoppingStep $I){
        $productsPage = new ProductsPage($I);
        $I->amOnPage(ProductsPage::$dressesUrl);
        $productsPage->checkFirstCards();
        $I->comment('Добавляю товары в корзину');
        $I->addProductToCard();

        $totalSum = preg_replace('/[$]/','',$I->grabTextFrom(ShoppingListPage::$totalSum));
        $sum = $this->getSumOfPrices($I);
        $I->assertEquals($totalSum, $sum, 'Checks that total sum is correct');

    }
    protected function getSumOfPrices(\AcceptanceTester $I){
        $sum = 0;

        for($i = 1; $i<= self::PRODUCTS_NMB; $i++){
            $price = preg_replace('/[$]/','',$I->grabTextFrom(ShoppingListPage::getOrderPriceByIndex($i)));
            $sum += $price;
        }
        return $sum;
    }
}