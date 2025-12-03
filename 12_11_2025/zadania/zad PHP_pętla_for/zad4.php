<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = (int)readline("Podaj pierwszą liczbe: ");
    $b = (int)readline("Podaj drugą liczbe: ");
    if ($a > $b) {
        echo "Pierwsza liczba jest wieksza"; }
    else {
        echo "Druga liczba jest wieksza";
        for ($i = $a; $i <= $b; $i++) {
            if($i % 3 ==0) {
                echo $i . " ";
            }
        }
    }
    ?>
</body>
</html>