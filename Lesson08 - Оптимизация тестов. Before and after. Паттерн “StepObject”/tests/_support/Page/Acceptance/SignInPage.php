<?php
namespace Page\Acceptance;

/**
 * Класс для входа в свой кабинет
 */
class SignInPage
{
    public static $url = '';
    public static $login = '//*[@class="login"]';
    public static $registeredText = '//*[@id="login_form"]/h3[1]';
    public static $email = '//*[@id="email"]';
    public static $password = '//*[@id="passwd"]';
    public static $submitLogin = '//*[@id="SubmitLogin"]';
    public static $signOut = '//*[@class="logout"]';

      /**
      * объект тестера А
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;
    /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I){
        $this->acceptanceTester = $I;
    }

     /**
     * Зайти на на сайт
     */
    public function SignIn(){
        $this->acceptanceTester->fillField(self::$email, '213buter@gmail.com');
        $this->acceptanceTester->fillField(self::$password, 'Qwerty12345678');
        $this->acceptanceTester->click(self::$submitLogin);
    }
    /**
     * выходим из аккаунта
     */
    public function logout(){
        return $this->acceptanceTester->click(self::$signOut);
        }

    
}