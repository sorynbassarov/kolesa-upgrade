<?php
namespace Page\Acceptance;

/**
 * класс для аккаунта
 */
class AccountPage
{

    /**
     * Наш урл
     */
    public static $myAccountUrl = '?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     *  Селектор для вишлиста
     */
    public static $mywishList = '//*[@class="lnk_wishlist"]';
   
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
}