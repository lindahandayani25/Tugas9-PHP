<?php
    // Menghitung Nilai BMI
    $nama = "Linda";
    $tinggi_badan = 143; // Satuan cm
    $berat_badan = 40;

    $konversi_tinggi_badan = $tinggi_badan / 100; // Satuan m
    $bmi = $berat_badan / ($konversi_tinggi_badan ** 2);
    if($bmi < 17){
        echo "Hallo $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus";
    }elseif($bmi >= 17 && $bmi <= 18.5){
        echo "Hallo $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus";
    }elseif($bmi >= 18.5 && $bmi <= 25){
        echo "Hallo $nama. Nilai BMI anda adalah $bmi, anda termasuk normal";
    }elseif($bmi >= 25 && $bmi <= 27){
        echo "Hallo $nama. Nilai BMI anda adalah $bmi, anda termasuk gemuk";
    }elseif($bmi > 27){
        echo "Hallo $nama. Nilai BMI anda adalah $bmi, anda termasuk gemuk";
    }else{
        echo "Hallo $nama. BMI anda tidak diketahui";
    }
?>