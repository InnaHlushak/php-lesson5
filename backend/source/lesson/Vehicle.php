<?php

/*
2. Розробіть абстрактний клас `Vehicle` з наступними характеристиками:
   - Захищені властивості: `$brand`, `$model`, `$year`
   - Конструктор, що приймає ці три параметри
   - Абстрактний метод `calculateRentalCost($days)`
   - Метод `getInfo()`, що повертає рядок з інформацією про транспортний засіб
*/

namespace Palmo\source\lesson;

//Абстрактний клас, який є базовим для класів Car та Motorcycle
abstract class Vehicle 
{
    protected string $brand;
    protected string $model;
    protected int $year;
    
    //конструктор
    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    //абстрактний метод для розрахунку вартості оренди
    abstract protected function calculateRentalCost(int $days);

    //імплементований метод (з реалізацією) що повертає рядок з інформацією про транспортний засіб
    public function getInfo(): string  
    {
        $info = "\n Бренд:" . $this->brand . "\t Модель:" . $this->model . "\t Рік:" . $this->year . "<br>";
        return $info;
    }
}