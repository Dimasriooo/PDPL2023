<?
// app/Http/Controllers/BMIController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adapters\BMICalculatorAdapter;
use App\Models\BMIResult;

class BMIController extends Controller {
    private $bmiCalculator;

    public function __construct(BMICalculatorAdapter $bmiCalculator) {
        $this->bmiCalculator = $bmiCalculator;
    }

    public function calculate(Request $request) {
        $weight = $request->input('weight');
        $height = $request->input('height');
        $result = $this->bmiCalculator->calculateBMI($weight, $height);

        // Simpan hasil ke database
        BMIResult::create(['result' => $result]);

        return view('bmi.result', ['result' => $result]);
    }
}



?>