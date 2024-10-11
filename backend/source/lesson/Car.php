<?php

/*
3. Створіть клас `Car`, що успадковує від `Vehicle`:
   - Додайте приватну властивість `$dailyRate`
   - Реалізуйте конструктор та метод `calculateRentalCost()`
*/

namespace Palmo\source\lesson;

//Клас-нащадок Car що реалізує абстрактний клас Vehicle
class Car extends Vehicle
{
    private float $dailyRate;  //денну ставку оренди
    public function __construct($brand, $model, $year, $dailyRate)
    {
        // Виклик конструктора батьківського класу
        parent::__construct($brand, $model, $year);
        $this->dailyRate = $dailyRate;
    }

    //реалізація абстрактного методу батьківського класу (із розширенням доступу до public)
    /**
     * Метод для розрахунку вартості оренди де dailyRate - денна ставку оренди, days - кількість днів
     * @param int $days
     * @return float
     */
    public function calculateRentalCost(int $days):float
    {
        return $this->dailyRate * $days;
    }    
}