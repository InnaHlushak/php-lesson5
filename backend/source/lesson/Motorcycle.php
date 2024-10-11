<?php

/*
4. Аналогічно створіть клас `Motorcycle` що успадковує від `Vehicle`:
   - Додайте приватну властивість `$hourlyRate`
   - Реалізуйте конструктор та метод `calculateRentalCost()`
*/

namespace Palmo\source\lesson;

//Клас-нащадок Car що реалізує абстрактний клас Vehicle
class Motorcycle extends Vehicle
{
    private float $hourlyRate;  //погодинна ставка оренди
    public function __construct($brand, $model, $year, $hourlyRate)
    {
        // Виклик конструктора батьківського класу
        parent::__construct($brand, $model, $year);
        $this->hourlyRate = $hourlyRate;
    }

    //реалізація абстрактного методу батьківського класу (із розширенням доступу до public)
    /**
     * Метод для розрахунку вартості оренди де hourlyRate - погодинна ставка оренди, days - кількість днів
     * @param int $days
     * @return float
     */
    public function calculateRentalCost(int $days):float
    {
        return $this->hourlyRate * 24 * $days;
    }    
}