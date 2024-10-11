<?php

/*
Створіть клас `RentalSystem`:
   - Додайте приватну властивість `$vehicles` (масив)
   - Реалізуйте методи `addVehicle()` та `rentVehicle()`
Додатково:
- Додайте додаткові методи до класу `RentalSystem` для керування списком транспортних засобів
*/

namespace Palmo\source\lesson;

class RentalSystem
{
    // властивість для зберігання транспортних засобів
    private array $vehicles = [];    

    /**
     * Метод  для додавання транспортного засобу в систему
     * @param \Palmo\source\lesson\Vehicle $vehicle
     * @return void
     */
    public function addVehicle(Vehicle $vehicle) 
    {
        $this->vehicles[] = $vehicle;
        echo "Додано транспортний засіб: " . $vehicle->getInfo();
    }

    /**
     * Метод  для оренди транспортного засобу 
     * @param \Palmo\source\lesson\Vehicle $vehicle
     * @param int $days
     * @return float
     */
    public function rentVehicle(Vehicle $vehicle, int $days): float
    {
        $cost = 0;
        
        // Перевірка, чи $vehicle є об'єктом класу Car (і тільки Car)
        if (get_class($vehicle) == 'Palmo\source\lesson\Car') {
            $cost = $vehicle->calculateRentalCost($days);
            echo "Це  Car.";
            echo "Вартість оренди за $days днів: " . $cost . "<br>";

            // Перевірка, чи $vehicle є об'єктом класу Motorcycle (і тільки Motorcycle)
        } elseif ((get_class($vehicle) === 'Palmo\source\lesson\Motorcycle')) {
            $cost = $vehicle->calculateRentalCost($days);
            echo "Це Motorcycle.";
            echo "Вартість оренди за $days днів: " . $cost . "<br>";
        } else {
            echo "Оренда неможлива. Недоступний транспортний засіб \n";
        }

        return $cost;
    }

    //Додатково:
    //метод-геттер для отримання масиву транспортних засобів доданих до системи
    public function getVehicles():array
    {
        return $this->vehicles;
    }

    /**
     * метод  для підрахунку кількості транспортних засобів доданих до системи
     * @return int
     */
    public function calculateVehicles():int
    {
        $count = 0;
        $list = $this->getVehicles();

        if(count($list) > 0) {
            foreach ($list as $vehicle) {
                $count++;
            }
        }
        return $count;
    }
}