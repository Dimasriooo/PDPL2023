<? 

// app/Services/ImperialBMICalculator.php
namespace App\Services;

use App\Interfaces\BMICalculatorInterface;

class ImperialBMICalculator implements BMICalculatorInterface {
    public function calculateBMI($weight, $height) {
        // Formula BMI untuk sistem imperial
        return ($weight / ($height * $height)) * 703;
    }
}


?>