<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $dzien = readline("Podaj dzien tygodnia");

    switch ($dzien) {
        case "Poniedziałek":
            echo "Zupa pomidorowa";
        case "Wtorek":
            echo "Schabowe";
        case "Środa":
            echo "Ryż";
        case "Czwartek":
            echo "Barszcz";
        case "Piątek":
            echo "Kurczak";
        case "Sobota":
            echo "Kasza";
        case "Niedziela":
            echo "Kotlet";
        default:
            echo "Podano nieprawidławy dzien";
            break;
    }
    ?>
</body>
</html>