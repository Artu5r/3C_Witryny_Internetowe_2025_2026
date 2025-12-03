<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $rodzaj = readline("Podaj rodzaj produktu");
    $cena = (float)readline("Podaj cene produktu");

    switch ($rodzaj){
        case "electronics":
            $rabat = 0.10;
        case "electronics":
            $rabat = 0.20;
        case "electronics":
            $rabat = 0.05;
            break;
        default:
            $rabat = 0;
            echo "Nieznany rodzaj \n";
    }

    $nowaCena = $cena - ($cena * $rabat);
    echo "Nowa cena: $nowaCena \n";
    ?>
</body>
</html>