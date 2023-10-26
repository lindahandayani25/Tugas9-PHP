<?php
    // Menghitung Volume Balok
    $panjang = 10;
    $lebar = 5;
    $tinggi = 8;

    $volume_balok = $panjang * $lebar * $tinggi;
    echo "Volume balok adalah $volume_balok cm kubik ";
    echo "<br>";
?>

<?php echo "===========================<br>";?>

<?php
    // Menghitung Volume Tabung
    $phi = 3.14;
    $jari_jari = 5;
    $tinggi = 20;

    $volume_tabung = $phi * ($jari_jari ** 2) * $tinggi;
    echo "Volume tabung adalah $volume_tabung cm kubik";
    echo "<br>";
?>

<?php echo "===========================<br>";?>

<?php
    // Menghitung Volume Bola
    $phi = 3.14;
    $jari_jari = 15;

    $volume_bola = 4/3 * $phi * ($jari_jari ** 3);
    echo "Volume bola adalah $volume_bola cm kubik";
    echo "<br>";
?>

