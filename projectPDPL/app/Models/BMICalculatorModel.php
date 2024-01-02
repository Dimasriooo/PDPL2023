<?php

// app/Models/BMICalculatorModel.php
namespace App\Models;

use App\Interfaces\BMICalculatorInterface;

class BMICalculatorModel {
    private $calculator;

    public function __construct(BMICalculatorInterface $calculator) {
        $this->calculator = $calculator;
    }

    public function calculateBMI($weight, $height) {
        return $this->calculator->calculateBMI($weight, $height);
    }
}



?>