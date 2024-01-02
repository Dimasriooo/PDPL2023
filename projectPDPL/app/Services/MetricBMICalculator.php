<?php 


// app/Services/MetricBMICalculator.php
namespace App\Services;

use App\Interfaces\BMICalculatorInterface;

class MetricBMICalculator implements BMICalculatorInterface {
    public function calculateBMI($weight, $height) {
        // Formula BMI untuk sistem metrik
        return $weight / ($height * $height);
    }
}




?>