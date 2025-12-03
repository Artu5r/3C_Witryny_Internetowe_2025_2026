<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $waga = 7;
    $rodzaj = "";

    if ($waga <=1 ){
        $rodzaj = "List zwykły";
    }elseif ($waga <=5 ){
        $rodzaj = "Mała paczka";
    }elseif ($waga <=10 ){
        $rodzaj = "Średnia paczka";
    }elseif ($waga <=20 ){
        $rodzaj = "Duża paczka";
    }else {
        $rodzaj = "Przesyłka";
    }
    echo "Rodzaj przesyłki $rodzaj";
    ?>
</body>
</html>