<?

// class controller

// app/Http/Controllers/BMICalculatorController.php
namespace App\Http\Controllers;

use App\Models\BMICalculatorModel;
use App\Services\MetricBMICalculator;
use App\Services\ImperialBMICalculator;
use App\Adapters\ImperialBMICalculatorAdapter;

class BMICalculatorController extends Controller {
    public function calculateMetricBMI() {
        $metricCalculator = new MetricBMICalculator();
        $model = new BMICalculatorModel($metricCalculator);
        $result = $model->calculateBMI(70, 1.75);

        return "Metric BMI: $result";
    }

    public function calculateImperialBMI() {
        $imperialCalculator = new ImperialBMICalculatorAdapter(new ImperialBMICalculator());
        $model = new BMICalculatorModel($imperialCalculator);
        $result = $model->calculateBMI(154, 69);

        return "Imperial BMI: $result";
    }
}

?>