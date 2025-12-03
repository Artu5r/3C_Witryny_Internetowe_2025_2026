<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $wartosc = (int)readline("Podaj wartość jakości powietrza 0-500");
    if ($wartosc >= 0 && $wartosc <=50)
    {
        echo 'Dobra jakość powietrza';
    } elseif ($wartosc >= 51 && $wartosc <=100) {
        echo "Umiarkowana jakość powietrza";
    }
    elseif ($wartosc >= 101 && $wartosc <=150) {
        echo "Zła jakość powietrza";
    }
    elseif ($wartosc >= 151 && $wartosc <=200) {
        echo "Bardzo zła jakość powietrza";
    }
     elseif ($wartosc >= 201 && $wartosc <=300) {
        echo "Szkodliwa jakość powietrza";
    }
     elseif ($wartosc >= 301 && $wartosc <=500) {
        echo "Niebezpieczna jakość powietrza";
    } else {
        echo "Podano nieprawidłowe dane"
    }
    ?>
</body>
</html>