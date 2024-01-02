<?php

// adapter class implementation

// app/Adapters/ImperialBMICalculatorAdapter.php
namespace App\Adapters;

use App\Interfaces\BMICalculatorInterface;
use App\Services\ImperialBMICalculator;

class ImperialBMICalculatorAdapter implements BMICalculatorInterface {
    private $imperialCalculator;

    public function __construct(ImperialBMICalculator $imperialCalculator) {
        $this->imperialCalculator = $imperialCalculator;
    }

    public function calculateBMI($weight, $height) {
        return $this->imperialCalculator->calculateBMI($weight, $height);
    }
}



?>