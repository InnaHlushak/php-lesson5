<?php

namespace Palmo\source\Interfaces;

interface PaymentMethod
{
   public function processPayment(float $amount); 
}