<?php
//namespace Tests\Acceptance;
use Codeception\Example;
use Page\Acceptance\Search;
/**
     * Класс для проверки авторизации
     */
    class SearchCest
{
/**
  * Тест на проверку поиска легковых потипу кузова  
  * @group test
  * @param Example $data 
  * @dataProvider  getDataForSearchCarsByBody
   */  
    public function SearchCarsByBodyType(\AcceptanceTester $I, Example $data)
    {
      $I->amOnPage('');
      $I->waitForElementClickable(Search::$autoCarsLink);
      $I->click(Search::$autoCarsLink);
      $I->waitForElementClickable(Search::$optionalSearchLink);
      $I->click(Search::$optionalSearchLink);
      $I->waitForElementClickable(Search::$carBodyTypeField);
      $I->click(Search::$carBodyTypeField);
      $I->click(sprintf(Search::$carBodyType, $data['carbodytype']));
      $I->click(Search::$searchButton);
      $I->seeInCurrentUrl($data['url']);
 }
    
    protected function getDataForSearchCarsByBody(){
        return[
            ['carbodytype' => 'sedan', 'url' => 'sedan'],
            ['carbodytype' => 'station-wagon', 'url' => 'station-wagon']


        ];
    }

}
