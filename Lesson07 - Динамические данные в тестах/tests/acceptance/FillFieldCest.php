<?php
//namespace Tests\Acceptance;
use Faker\Factory;
use Page\Fill;
use Helper\CustomFakerProvider;
use Codeception\Example;
/**
 * Классс для тестирования формы
 */
class FillFieldCest
{
    /**
     * Тест на проверку заполнения полей с помощью Faker
     * @group test2
     * @param Example $data, $data1
        * @dataProvider  getMonth
     */

    public function checkFillField(\AcceptanceTester $I, Example $data)
    {
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));
        $name = $faker->firstName; 
        $lastName = $faker->lastName;
        $email = $faker->email;
        $phoneNumber = $faker->getPhoneKZ();
        $address = $faker->address;
        $city = $faker->city;
        $state = $faker->region;
        $postal = $faker->postcode;
        $cardNumber = $faker->getCard();
        $secureCode = $faker->getSecureCode();

        $I->amOnPage('');
        $I->fillField(Fill::$firstname,$name);
        $I->fillField(Fill::$lastName,$lastName);
        $I->fillField(Fill::$email,$email);
        $I->fillField(Fill::$phoneNumber,$phoneNumber );
        $I->fillField(Fill::$address,$address);
        $I->fillField(Fill::$city,$city);
        $I->fillField(Fill::$state,$state);
        $I->fillField(Fill::$postal,$postal);
        $I->click(Fill::$paymentMethod);
        $I->fillField(Fill::$firstNameCredit,$name);
        $I->fillField(Fill::$lastNameCredit,$lastName);
        $I->fillField(Fill::$cardNumber,$cardNumber);
        $I->fillField(Fill::$secureCode,$secureCode);
        $I->click(Fill::$expirationMonth);
        $I->click(sprintf(Fill::$choosingMonth, $data['monthtochoose']));
        $I->fillField(Fill::$addressCard,$address);
        $I->fillField(Fill::$addressCard2,$address);
        $I->fillField(Fill::$cityCard, $city);
        $I->fillField(Fill::$stateCard, $state);
        $I->wait(5);
        $I->click(Fill:: $registerButton);
        $I->waitForText('Good job');
    }

        protected function getMonth(){
            $monthes = [
                ['monthtochoose' => 'January'],
                ['monthtochoose' => 'February'],
                ['monthtochoose' => 'March'],
                ['monthtochoose' => 'April'],
                ['monthtochoose' => 'May'],
                ['monthtochoose' => 'June']
    
    
            ];
            $random_key_for_month = array_rand($monthes,2);
            return[ 
                $monthes[$random_key_for_month[0]]
                ];
            
        }
    }
   
        
    





