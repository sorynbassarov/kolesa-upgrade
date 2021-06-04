<?php
namespace Page\Acceptance;

class MainPage
{
    // include url of current page
    public static $URL = '/index.php';
    public static $TitleBlockCSS = 'div:nth-of-type(2) > div > div > nav > span';
    public static $TitleBlockXPATH = '//*[@id="header"]//div[1]/nav[1]/span[1]';
    public static $BlouseCheckCSS = '#center_column h1';
    public static $BlouseCheckXPATH = '//*[@id="center_column"]//h1[1]';
    public static $QuickViewCSS = '#homefeatured li:nth-child(2) a.quick-view';
    public static $QuickViewXPATH = '//*[@id="homefeatured"]//li[2]//a[@class="quick-view"]';

    public static $MoveMouseCSS = '#homefeatured > li:nth-child(2)  a > img';
    public static $MoveMouseXPATH = '//*[@id="homefeatured"]/li[2]//a[1]/img[1]';


    
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    public function clickQuickView()
    {
        $this->acceptanceTester->click(self::$QuickViewCSS);
    }

    public function mouseMove()
    {
        $this->acceptanceTester->moveMouseOver(self::$MoveMouseCSS);
    }
    public function scroll()
    {
        $this->acceptanceTester->scrollTo(self::$MoveMouseCSS);
    }
    

}
