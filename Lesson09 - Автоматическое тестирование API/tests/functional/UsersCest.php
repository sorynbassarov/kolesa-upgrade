<?php
use Faker\Factory;
use Page\Fill;
use Helper\CustomFakerProvider;
use Codeception\Example;

/**
 * Класс для работы с юзером
 */
class UsersCest
{
    public static $defaultSchema = 
    [
        "job"       => 'string',
        "_id"       => 'string',
        "email"     => 'string',
        "superhero" => 'boolean',
        "name"      => 'string',
        "owner"     => 'string'
    ];
    
    /**
     *  Тест на создание юзера
     * @group test1 
     */
    public function checkUserCreate(\FunctionalTester $I)
    {
        $userData = [
            'email' => $I->getFaker()->email,
            'owner' => 'kyonzik',
            'job'   => $I->getFaker()->company,
            'name'  => $I->getFaker()->name
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPOST('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGET('people',  $userData);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);

        $I->sendPut('human?_id=', ['name' => $updatedName = $I->getFaker()->name.'updated']);
        $I->seeResponseCodeIsSuccessful();

    }

    /**
     * Проверяем негативный сценарий на создании пользователя без эмайла
     * @group test3
     * @dataProvider getDataForCreateUserNegative
     * @param Example $data
     */
    public function checkUserCreateNegative(FunctionalTester $I, Example $data)
    {
        $email = $I->getFaker()->userName;
        $owner = $I->getFaker()->userName;

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human',[
            $data['email'] ? $email : null,
            $data['owner'] ? $owner : null,
        ]);
        $I->seeResponseContainsJson($data['errorText']);

    }

    /**
     * dataProvider для теста
     */
    protected function getDataForCreateUserNegative()
    {
        return[
            [
                'email' => true,
                'owner' => false,
                'errorText' => ['error' => 'Internal Server Error']
            ],
            [
                'email' => false,
                'owner' => true,
                'errorText' => ['error' => 'Internal Server Error']
            ]
        ];
    }
}