function calculateBMI() {
    var height = document.getElementById("height").value;
    var weight = document.getElementById("weight").value;

    console.log(height);
    console.log(weight);

    if (height === "" || weight === "") {
        document.getElementById("message").innerHTML = "Silakan isi semua field.";
        document.getElementById("results").innerHTML = "";
        return;
    }

    var bmi = (weight / ((height / 100) * (height / 100))).toFixed(2);
    document.getElementById("results").innerHTML = bmi;

    // Memberikan kategori BMI
    var message = "";
    if (bmi < 18.5) {
        message = "Berat badan kurang, lebih banyak makan.";
    } else if (bmi >= 18.5 && bmi <= 24.9) {
        message = "Berat badan normal, pertahankan!";
    } else if (bmi >= 25 && bmi <= 29.9) {
        message = "Berat badan berlebih, perlu perhatian.";
    } else {
        message = "Berat badan anda Obesitas, segera konsultasi ke dokter dan dengarkan saran dokter.";
    }

    document.getElementById("message").innerHTML = message;
}
