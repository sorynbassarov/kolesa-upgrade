<?php
namespace Page\Acceptance;

class DressPage
{
    /**
     * URL главной страницы товаров
     */
    public static $URL = '/index.php?id_category=8&controller=category';
    /**
     * Селектор заголовка
     */
    public static $DressCheck = 'div#center_column > div > div > div > span';
    public static $SummerDressButton = '#categories_block_left > div > ul > li:nth-of-type(3)';
    




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

   
    public function clickSummerDressButton()
    {
        $this->acceptanceTester->click(self::$SummerDressButton);
    }
    
}
