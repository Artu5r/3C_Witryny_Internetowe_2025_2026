<?php
// Generowanie 6 losowych liczb 1-49
$liczby = [];
for ($i = 0; $i < 6; $i++) {
    $liczby[] = rand(1, 49);
}

// Aktualna data
$data = date("d-m-Y H:i:s");

// Zapis do pliku
$wpis = "$data wylosowano liczby: " . implode(", ", $liczby) . "\n";
file_put_contents("liczby.txt", $wpis, FILE_APPEND);

// Odczyt pliku
echo file_get_contents("liczby.txt");
?>