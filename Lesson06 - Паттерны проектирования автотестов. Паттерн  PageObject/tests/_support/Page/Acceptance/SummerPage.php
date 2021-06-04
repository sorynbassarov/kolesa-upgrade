<?php
namespace Page\Acceptance;

class SummerPage
{
    /**
     * URL главной страницы товаров
     */
    public static $URL = '/index.php?id_category=11&controller=category';
    /**
     * Селектор заголовка
     */
    
    public static $ListButton = 'li#list > a > i';
    public static $ListText = 'li  div > div:nth-of-type(2) > p';
    public static $SummerCheck = 'div#center_column > div > div > div > span';




      /**
      * объект тестера А
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;
    /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }


    public function clickListButton()
    {
        $this->acceptanceTester->click(self::$ListButton);
    }
    
}
