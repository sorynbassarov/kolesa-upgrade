<?php
namespace Page\Acceptance;

/**
 * Класс с главной страницой
 */
class MainPage
{
    /**
     * Наш Урла
     */
    public static $url = '/index.php';

    /**
     * селектор с выбором товара
     */
    public static $productsCard = '//*[@id="homefeatured"]//li[%s]';

    /**
     * селетор quickView
     */
    public static $quickView = '//ul[@id="homefeatured"]//li[1]//a[@class="quick-view"]';

    /**
     * Селектор всплывающего окна
     */
    public static $Iframe = '//*[@id="fancybox-frame1623057789002"]';

    /**
     * Селектор с вишлистом
     */
    public static $wishList = '//*[@id="wishlist_button"]';

    /**
     *  Селектор для закрытия вишлиста
     */
    public static $closeWishList = '//*[@title="Close"]';
    
    /**
     *  Селектор с аккаунтом
     */
    public static $myAccount = '//*[@class="header_user_info"][1]';
   
}