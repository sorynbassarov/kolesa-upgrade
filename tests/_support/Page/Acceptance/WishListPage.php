<?php
namespace Page\Acceptance;

/**
 * класс уишлиста
 */
class WishListPage
{

    /**
     * Наш урл
     */
    public static $wishListUrl = '/index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * Селектор для опредения числа товара
     */
    public static $qty = '//*[@id="wishlist_34127"]/td[2]';

    /**
     * Селектор для очистки вишлиста
     */
    public static $delWishlist = '//*[@id="wishlist_34127"]//i[1]';

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
     * Проверяем Qty
     */
    public function getQty()
    {
        return $this->acceptanceTester->grabTextFrom(self::$qty);
    }
    
    /**
     * очищаем уишлист
     */
    public function clearWishlist(){
       return $this->acceptanceTester->click(self::$delWishlist);

    
    }

}