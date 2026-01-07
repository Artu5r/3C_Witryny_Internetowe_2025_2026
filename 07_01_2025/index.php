<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dane_do_zapisu = "Przykladowa tresc";
    $plik = fopen("nazwa_pliku.txt" , "a+");

    flock($plik , "$dane_do_zapisu\n");
    rewind($plik);

    $zawartosc = fread($plik, filesize("nazwa_pliku.txt"));
    
    flock($plik, 3);
    fclose($plik);

    echo n1br($zawartosc);
    ?>
</body>
</html>