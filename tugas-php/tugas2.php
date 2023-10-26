<?php 
    $n = 9; // Membuat variabel n dengan isi 9

    for ($i=1; $i<$n+1; $i++) { // Looping baris dengan inisialisasi i=1, dimana kondisinya jika i kurang dari 10 maka eksekusi, dengan iterasi i+1. 
        for($j=10; $j>$i; $j--) { // Looping kolom dengan inisialisasi j=10, dimana kondisinya jika j lebih dari i maka eksekusi, dengan iterasi j-1. 
            echo "*"; // Menampilkan bintang
        }    
        echo "<br>"; // Membuat line baru
    }
?>

