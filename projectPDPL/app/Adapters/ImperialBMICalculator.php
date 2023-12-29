<?php

// app/Adapters/ImperialBMICalculator.php
namespace App\Adapters;

class ImperialBMICalculator implements BMICalculatorAdapter {
    public function calculateBMI($weight, $height) {
        return ($weight / ($height * $height)) * 703;
    }
}


?>