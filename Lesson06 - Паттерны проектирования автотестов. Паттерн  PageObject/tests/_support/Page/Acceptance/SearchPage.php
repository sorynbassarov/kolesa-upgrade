<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * URL главной страницы товаров
     */
    public static $URL = '/index.php';
    /**
     * Селектор заголовка
     */
    public static $TitleBlock = 'div:nth-of-type(2) > div > div > nav > span';
    
    public static $DressButton = '//*[@id="block_top_menu"]/ul[1]/li[2]/a[1]';
  



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

    public function clickDressButton()
    {
        $this->acceptanceTester->click(self::$DressButton);
    }
  
}
