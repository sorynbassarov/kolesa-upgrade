<?php
namespace Page;


/**
 * PageObject для страницы формы
 */

class Fill
{
    /**
     * Локатор имени
     */
   public static $firstname = "//*[@id = 'firstName']";
   
   /**
    * Локатор для фамилии
    */
   public static $lastName = "//*[@id = 'lastName']";
   /**
    * Локатор для емайла
    */
   public static $email = "//*[@type = 'email']";
   /**
    * Локатор поля номера телефона
    */
   public static $phoneNumber = "//*[@id = 'phoneNumber']";
    /**
     * Локатор поля адреса
     */
   public static $address = "//*[@id = 'address']";
   /**
    * Локатор для города
    */
   public static $city = "//*[@id = 'city']";
   /**
    * Локатор для региона
    */
    public static $state = "//*[@id = 'state']";
    /**
     * Локатор поля почтового индекса
     */
    public static $postal = "//*[@id = 'postal']";
    /**
     * Локатор для выбора спсоба оплаты
     */
    public static $paymentMethod = "//*[@id='input_32_paymentType_credit']";
    /**
     * Локатор для Имени
     */
    public static $firstNameCredit = "//*[@id='input_32_cc_firstName']";
    /**
     * Локатор для фамилии
     */
    public static $lastNameCredit = "//*[@id='input_32_cc_lastName']";
    /**
     * Локатор для кердита
     */
    public static $cardNumber = "//*[@id='input_32_cc_number']";
    /**
     *  Локатор для секртеного кода
     */
    public static $secureCode = "//*[@id='input_32_cc_ccv']";
    /**
     * Локатор для выбора месяца
     */
    public static $expirationMonth = "//*[@id='input_32_cc_exp_month']";
    /**
     * Вбираем месяц
     */
    public static $choosingMonth = "//*[@value='%s']";
    
    /**
     * Локатор для выбора года
     */
    public static $expirationYear = "//*[@id='input_32_cc_exp_year']";
    /**
     * Выбираем год
     */
    public static $choosingYear = "//*[@value='%s']";
    /**
     * Локатор для выбора Адреса
     */
    public static $addressCard = "//*[@id='input_32_addr_line1']";
    /**
     * Локатор для выбора второго адерса
     */
    public static $addressCard2 = "//*[@id='input_32_addr_line2']";
    /**
     * Локатор для выбора города
     */
    public static $cityCard = "//*[@id='input_32_city']";
    /**
     * Локатор для выбра региона
     */
    public static $stateCard = "//*[@id='input_32_state']";
    /**
     * Локатор для выбора почтового индекса
     */
    public static $postalCard = "//*[@id='input_32_postal']";
    /**
     * Локатор для выбора страны
     */
    public static $countryCard = "//*[@id='input_32_country']";
    /**
     * Локатор кнопки регистрации
     */
    public static $registerButton = "//*[@type='submit']";
  }


