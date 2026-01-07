<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body><?php
// =====================================================
// ZADANIE 1: Generator liczb ze statystykami
// =====================================================

echo "<h1>📊 Zadanie 1: Generator liczb i statystyki</h1>";

// =====================================================
// KROK 1: Generowanie 20 losowych liczb (1-100)
// =====================================================

$liczby = [];
for ($i = 0; $i < 20; $i++) {
    $liczby[] = rand(1, 100);
}

echo "<h2>🎲 Wygenerowane liczby:</h2>";
echo "<p>" . implode(", ", $liczby) . "</p>";

// =====================================================
// KROK 2: Zapis do pliku - 3 etapowy sposób z blokadą
// =====================================================

$nazwaPliku = "liczby.txt";

// ETAP 1: Otwarcie pliku
$plik = fopen($nazwaPliku, "w");

if ($plik) {
    // ETAP 2: Założenie blokady (LOCK_EX - wyłączna blokada do zapisu)
    if (flock($plik, LOCK_EX)) {
        echo "<p>🔒 Blokada założona - plik zablokowany do zapisu</p>";
        
        // Zapis każdej liczby w nowej linii
        foreach ($liczby as $liczba) {
            fwrite($plik, $liczba . "\n");
        }
        
        echo "<p>✅ Dane zapisane do pliku: $nazwaPliku</p>";
        
        // Zdjęcie blokady
        flock($plik, LOCK_UN);
        echo "<p>🔓 Blokada zdjęta</p>";
    } else {
        echo "<p>❌ Nie udało się założyć blokady!</p>";
    }
    
    // ETAP 3: Zamknięcie pliku
    fclose($plik);
    echo "<p>📁 Plik zamknięty</p>";
} else {
    echo "<p>❌ Nie udało się otworzyć pliku!</p>";
}

// =====================================================
// KROK 3: Odczyt pliku i obliczenia statystyczne
// =====================================================

echo "<h2>📖 Odczyt danych z pliku:</h2>";

// Użycie funkcji file() - odczytuje plik do tablicy (każda linia = element)
$odczytaneLiczby = file($nazwaPliku, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($odczytaneLiczby !== false) {
    // Konwersja stringów na liczby całkowite
    $odczytaneLiczby = array_map('intval', $odczytaneLiczby);
    
    echo "<h3>Wszystkie zapisane liczby:</h3>";
    echo "<p>" . implode(", ", $odczytaneLiczby) . "</p>";
    
    // Obliczenia statystyczne
    $suma = array_sum($odczytaneLiczby);
    $ilosc = count($odczytaneLiczby);
    $srednia = round($suma / $ilosc, 2);
    $max = max($odczytaneLiczby);
    $min = min($odczytaneLiczby);
    
    // Liczenie parzystych i nieparzystych
    $parzyste = 0;
    $nieparzyste = 0;
    
    foreach ($odczytaneLiczby as $liczba) {
        if ($liczba % 2 == 0) {
            $parzyste++;
        } else {
            $nieparzyste++;
        }
    }
    
    // Wyświetlenie statystyk
    echo "<h3>📈 Statystyki:</h3>";
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
    echo "<tr><td><strong>Suma:</strong></td><td>$suma</td></tr>";
    echo "<tr><td><strong>Średnia:</strong></td><td>$srednia</td></tr>";
    echo "<tr><td><strong>Wartość maksymalna:</strong></td><td>$max</td></tr>";
    echo "<tr><td><strong>Wartość minimalna:</strong></td><td>$min</td></tr>";
    echo "<tr><td><strong>Liczby parzyste:</strong></td><td>$parzyste</td></tr>";
    echo "<tr><td><strong>Liczby nieparzyste:</strong></td><td>$nieparzyste</td></tr>";
    echo "</table>";
    
    // =====================================================
    // KROK 4: Zapis statystyk do pliku statystyki.txt
    // =====================================================
    
    $plikStatystyki = "statystyki.txt";
    $aktualnaData = date("Y-m-d H:i:s");
    
    // Format wpisu
    $wpis = "[$aktualnaData] Suma: $suma | Średnia: $srednia | Min: $min | Max: $max | Parzyste: $parzyste | Nieparzyste: $nieparzyste\n";
    
    // Dopisanie do pliku (FILE_APPEND - dopisuje, nie nadpisuje)
    $plikStat = fopen($plikStatystyki, "a");
    
    if ($plikStat) {
        if (flock($plikStat, LOCK_EX)) {
            fwrite($plikStat, $wpis);
            flock($plikStat, LOCK_UN);
        }
        fclose($plikStat);
        
        echo "<h3>💾 Statystyki zapisane do pliku: $plikStatystyki</h3>";
        echo "<pre>$wpis</pre>";
    }
    
    // Wyświetlenie całej historii statystyk
    echo "<h3>📜 Historia statystyk:</h3>";
    echo "<pre>";
    echo htmlspecialchars(file_get_contents($plikStatystyki));
    echo "</pre>";
    
} else {
    echo "<p>❌ Błąd odczytu pliku!</p>";
}

?>
</html>