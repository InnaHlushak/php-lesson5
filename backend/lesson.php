<?php
//імпортувати простір імен
require __DIR__ . '/vendor/autoload.php';

//використати класи 
use Palmo\source\lesson\Vehicle;
use Palmo\source\lesson\Car;
use Palmo\source\lesson\Motorcycle;
use Palmo\source\lesson\CreditCardPayment;
use Palmo\source\lesson\RentalSystem;
use Palmo\source\lesson\CashPayment;


echo '<h2> Абстрактний клас Vehicle є базовим (батьківським) для Car i Motorcycle</h2>';

// Створити об'єкт класу Car
$car = new Car('Toyota', 'Camry', 2022, 100);
//виклик імплементованого методу
echo $car->getInfo();
//виклик абстрактного методу
$days = 5;
echo "Вартість оренди за $days днів: " . $car->calculateRentalCost($days) . "<br>";

// Створити об'єкт класу Motorcycle
$motorcycle = new Motorcycle('Yamaha', 'MT-07', 2007, 20);
//виклик імплементованого методу
echo $motorcycle->getInfo();
//виклик абстрактного методу
$days = 1;
echo "Вартість оренди за $days днів: " . $motorcycle->calculateRentalCost($days) . "<br>";

echo '<h2> Клас CreditCardPayment імплементує інтерфейс PaymentMethod</h2>';
// Створити об'єкт класу CreditCardPayment
$payment = new CreditCardPayment('1234567812345678', '2024-11');
//виклик обов'язкового методу, реалізованого в класі
$payment->processPayment(1000);

echo '<h2> Клас RentalSystem що визначає систему оренди RentalSystem</h2>';
/*
7. Напишіть код для демонстрації роботи системи:
   - Створіть екземпляр `RentalSystem`
   - Додайте до системи кілька транспортних засобів
   - Створіть екземпляр `CreditCardPayment`
   - Продемонструйте оренду різних транспортних засобів
*/
// Створити об'єкт класу RentalSystem
$object = new RentalSystem();
// Створити об'єкт класу CreditCardPayment
$payment_card = new CreditCardPayment('1234567812345678', '2024-11');
$cost = 0;

$vehicle1 = new Car('Toyota', 'Camry', 2022, 500);
$object->addVehicle($vehicle1);
//орендувати $vehicle1 на 10 днів
$cost = $object->rentVehicle($vehicle1,10); 
$payment_card->processPayment($cost);

$vehicle2 = new Motorcycle('Yamaha', 'MT-07', 2007, 20.5);
$object->addVehicle($vehicle2);
//орендувати $vehicle2 на 10 днів
$cost = $object->rentVehicle($vehicle2,10); 
$payment_card->processPayment($cost);

echo '<h2>Додаткові завдання: </h2>';
//Додатковий клас платіжних методів, що реалізує інтерфейс `PaymentMethod`
$vehicle3 = new Car('Ferrari ', 'Purosangue ', 2023, 5000);
$object->addVehicle($vehicle3);
//орендувати $vehicle3 на 10 днів
$cost = $object->rentVehicle($vehicle3,10); 
$payment_cash = new CashPayment();
$payment_cash->processPayment($cost);


// Додаткові методи, додані до класу `RentalSystem` для керування списком транспортних засобів
$count = $object->calculateVehicles();
echo "Кількість усіх орендованих засобів:" . $count . "<br>";

echo "Повна інформація про перелік усіх орендованих засобів:" . "<br>";
$list = $object->getVehicles();
print_r($list);




