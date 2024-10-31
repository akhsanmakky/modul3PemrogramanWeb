<?php
function cetakBilangan($n)
{
    // Loop dari 1 hingga n
    for ($i = 1; $i <= $n; $i++) {
        // Cek jika bilangan habis dibagi 4 dan 6
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "Pemrograman Website 2024" . PHP_EOL;
        } 
        // Cek jika bilangan habis dibagi 5
        elseif ($i % 5 == 0) {
            echo "2024" . PHP_EOL;
        } 
        // Cek jika bilangan hanya habis dibagi 4 tetapi tidak habis dibagi 6
        elseif ($i % 4 == 0) {
            echo "Pemrograman" . PHP_EOL;
        } 
        // Cek jika bilangan hanya habis dibagi 6 tetapi tidak habis dibagi 4
        elseif ($i % 6 == 0) {
            echo "Website" . PHP_EOL;
        } 
        // Jika tidak memenuhi salah satu kondisi di atas
        else {
            echo $i . PHP_EOL;
        }
    }
}

// Contoh penggunaan fungsi
cetakBilangan(30);
?>
