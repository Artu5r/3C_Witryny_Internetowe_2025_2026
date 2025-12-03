<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $suma = 0;
    $count = 0;

    echo "Podanie 0 konczy program \n";
    
    for ( ; ; ) {
        $num = (int)readline("podaj liczbe: ");
        if($num == 0) break;
        $suma += $num;
        $count++;
    }

    echo "Suma $suma \n";
    echo "Ilość: $count\n";
    ?>
</body>
</html>