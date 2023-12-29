<?php

// app/Adapters/BMICalculator.php
namespace App\Adapters;

class BMICalculator implements BMICalculatorAdapter {
    public function calculateBMI($weight, $height) {
        return $weight / ($height * $height);
    }
}



?>