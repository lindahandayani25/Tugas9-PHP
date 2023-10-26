<?php 
    $n = 9; // Membuat variabel n dengan isi 9

    for ($i=1; $i<$n+1; $i++) { // Looping baris dengan inisialisasi i=1, dimana kondisinya jika i kurang dari 10 maka eksekusi, dengan iterasi i+1. Misalnya i=1, dan 1<10 maka dieksekusi lalu 1+1=2, dan 2<10 maka dieksekusi. Begitu seterusnya sampai 9+1=10, dan 10 lebih dari sama dengan 10, sehingga kondisinya sudah tidak terpenuhi dan eksekusi dihentikan.
        for($j=0; $j<$i; $j++) { // Looping kolom dengan inisialisasi j=0, dimana kondisinya jika j kurang dari i maka eksekusi, dengan iterasi j+1. Misalnya j=0, dan 0<1 maka dieksekusi lalu 0+1=1, dan 1<2 maka dieksekusi. Begitu seterusnya sampai 8+1=9, dan 9 lebih dari sama dengan 9, sehingga kondisinya sudah tidak terpenuhi dan eksekusi dihentikan.
            echo "$j"; // Menampilkan variabel j
        }    
        echo "<br>"; // Membuat line baru
    }
?>