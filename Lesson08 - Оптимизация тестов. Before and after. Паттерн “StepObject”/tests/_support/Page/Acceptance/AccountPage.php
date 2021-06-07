<?php
namespace Page\Acceptance;

/**
 * class with elements and methods on MainPage
 */
class AccountPage
{
    public static $myAccountUrl = '?fc=module&module=blockwishlist&controller=mywishlist';
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