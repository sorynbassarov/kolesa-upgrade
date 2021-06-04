<?php
//namespace Tests\Acceptance;
use Codeception\Example;
use Page\Containers;
/**
     * Класс для проверки
     */
    
class DataProviderHabrCest
{

 /**
  * Тест на реализации dataprovider
  * @group test3
  * @param Example $data 
  * @dataProvider  getRandomElementForMenu
   */  
    public function ClickOnMenu(\AcceptanceTester $I, Example $data)
    {
      $I->amOnPage('');
      $I->click(sprintf(Containers::$navBarLinks, $data['listofcontainers']));
      $I->seeInCurrentUrl($data['url']);
      $I->waitForText($data['text'],5,Containers::$pageHeader);
    
 }
    protected function getRandomElementForMenu(){
        $lists = [
            ['listofcontainers' => 'flows/develop/', 'url' => 'develop', 'text' => 'Разработка'],
            ['listofcontainers' => 'flows/admin/', 'url' => 'admin',  'text' => 'Администрирование'],
            ['listofcontainers' => 'flows/design/', 'url' => 'design', 'text' => 'Дизайн'],
            ['listofcontainers' => 'flows/management/', 'url' => 'management', 'text' => 'Менеджмент'],
            ['listofcontainers' => 'flows/marketing/', 'url' => 'marketing', 'text' => 'Маркетинг'],
            ['listofcontainers' => 'flows/popsci/', 'url' => 'popsci', 'text' => 'Научпоп']

        ];
        $random_key_for_lists = array_rand($lists,2);
        return[ 
            $lists[$random_key_for_lists[0]],
            $lists[$random_key_for_lists[1]]
            ];
    }

}