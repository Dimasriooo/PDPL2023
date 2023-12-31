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
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="perempuan"> 
                <label for="radio_0" class="custom-control-label">perempuan</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="laki-laki"> 
                <label for="radio_1" class="custom-control-label">laki-laki</label>
              </div>
            </div>
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