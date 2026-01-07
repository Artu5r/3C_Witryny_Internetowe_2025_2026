<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $liczby = [];
    for ($i = 0; $i < 20; $i++) {
        $liczby[] = rand(1, 100);
    }

    $plik = fopen("liczby.txt", "w");
    flock($plik, LOCK_EX);
    foreach ($liczby as $liczba) {
        fwrite($plik, $liczba . "\n");
    }
    flock($plik, LOCK_UN);
    fclose($plik);

    $odczytane = file("liczby.txt", FILE_IGNORE_NEW_LINES);
    $odczytane = array_map('intval', $odczytane);

    echo "Liczby: " . implode(", ", $odczytane) . "\n";

    $suma = array_sum($odczytane);
    $srednia = $suma / count($odczytane);
    $max = max($odczytane);
    $min = min($odczytane);
    $parzyste = count(array_filter($odczytane, fn($n) => $n % 2 == 0));
    $nieparzyste = count($odczytane) - $parzyste;

    echo "Suma: $suma\n";
    echo "Średnia: $srednia\n";
    echo "Max: $max\n";
    echo "Min: $min\n";
    echo "Parzyste: $parzyste\n";
    echo "Nieparzyste: $nieparzyste\n";

    $data = date("Y-m-d H:i:s");
    $wpis = "[$data] Suma: $suma | Średnia: $srednia | Min: $min | Max: $max | Parzyste: $parzyste | Nieparzyste: $nieparzyste\n";
    file_put_contents("statystyki.txt", $wpis, FILE_APPEND);
    ?>
</body>
</html>