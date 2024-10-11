<?php

/*
Додаткові завдання: 
Створіть додаткові класи платіжних методів, що реалізують інтерфейс `PaymentMethod`
*/

namespace Palmo\source\lesson;
use Palmo\source\interfaces\PaymentMethod;


//Клас CreditCardPayment імплементує інтерфейс PaymentMethod
class CashPayment implements PaymentMethod
{
    private int $cardNumber; //Номер картки
    //реалізація обов'язкового методу (із інтерфейсу)
    
    /**
     * метод визначає процес оплати готівкою (обробки платежу), 
     * де amount - сума платежу
     * @param float $amount
     * @return void
     */
    public function processPayment(float $amount)
    {
        echo "Здійснено оплату готівкою у розмірі {$amount}грн." . "<br>";
    }
}