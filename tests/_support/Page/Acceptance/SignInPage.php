<?php
namespace Page\Acceptance;

/**
 * Класс для входа в свой кабинет
 */
class SignInPage
{
    public static $url = '';

    /**
     * локатор для логина
     */
    public static $login = '//*[@class="login"]';

    /**
     * текст ALREADY REGISTERED?
     */
    public static $registeredText = '//*[@id="login_form"]/h3[1]';

    /**
     *  Вводим емайл
     */
    public static $email = '//*[@id="email"]';

    /**
     *  Вводим пароль
     */
    public static $password = '//*[@id="passwd"]';

    /**
     *  Подтвержаем выбор 
     */
    public static $submitLogin = '//*[@id="SubmitLogin"]';

    /**
     *  Выходим из кабинета
     */
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
     * Метод для захода на сайт 
     */
    public function SignIn(){
        $this->acceptanceTester->fillField(self::$email, '213buter@gmail.com');
        $this->acceptanceTester->fillField(self::$password, 'Qwerty12345678');
        $this->acceptanceTester->click(self::$submitLogin);
    }
    /**
     * Метода для выхода из сайта
     */
    public function logout(){
        return $this->acceptanceTester->click(self::$signOut);
        }

    
}