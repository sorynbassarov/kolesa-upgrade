<?php
namespace Page\Acceptance;

/**
 * Класс с главной страницой
 */
class MainPage
{
    public static $url = '/index.php';
    public static $productsCard = '//*[@id="homefeatured"]//li[%s]';
    public static $quickView = '//ul[@id="homefeatured"]//li[1]//a[@class="quick-view"]';
    public static $Iframe = '//*[@id="fancybox-frame1623057789002"]';
    public static $wishList = '//*[@id="wishlist_button"]';
    public static $closeWishList = '//*[@title="Close"]';
    public static $myAccount = '//*[@class="header_user_info"][1]';
   
}