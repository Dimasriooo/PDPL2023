<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Kalkulator</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center">BMI Kalkulator</h2>
        </div>
        <div class="calculator">
            <div class="inputs">
                <label for="height">Tinggi (CM): </label>
                <input type="number" id="height" min="1">
            </div>
            <div class="inputs">
                <label for="weight">Berat (KG): </label>
                <input type="number" id="weight" min="1">
            </div>
            <button type="button" class="calcBtn" onclick="calculateBMI()">HITUNG BMI</button>
            <div class="results">BMI kamu adalah: <span id="results"></span></div>
            <div class="message" id="message"></div>
        </div>
    </div>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>