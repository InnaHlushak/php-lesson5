<?php

/*
5. Розробіть клас `CreditCardPayment`, що реалізує інтерфейс `PaymentMethod`:
   - Додайте приватні властивості `$cardNumber` та `$expirationDate`
   - Реалізуйте конструктор та метод `processPayment()`
*/

namespace Palmo\source\lesson;
use Palmo\source\interfaces\PaymentMethod;


//Клас CreditCardPayment імплементує інтерфейс PaymentMethod
class CreditCardPayment implements PaymentMethod
{
    private int $cardNumber; //Номер картки
    private string $expirationDate; //Термін придатності

    //конструктор
    public function __construct($cardNumber, $expirationDate)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

    //реалізація обов'язкового методу (із інтерфейсу)
    //для картки з  cardNumber - номер картки, expirationDate - термін дії картки
    /**
     * метод визначає процес оплати карткою (обробки платежу), 
     * де amount - сума платежу
     * @param float $amount
     * @return void
     */
    public function processPayment(float $amount)
    {
        // маскування номера картки (з метою безпеки)
        $masked_number = str_repeat('*', 4) . substr($this->cardNumber, -4);
        // Перевірка дійсності картки (термін дії картки)
        $current_date  =  date('Y-m');
        $date_card = $this->expirationDate;
        echo "Поточна дата: $current_date  \t Термін дії картки: $date_card " . "<br>";           

        if (!($date_card < $current_date)) {
            echo "Із картки $masked_number  знято суму $amount грн" . "<br>";
        } else {
            echo "Карткa уже недійсна" . "<br>";
        }
    } 

}
