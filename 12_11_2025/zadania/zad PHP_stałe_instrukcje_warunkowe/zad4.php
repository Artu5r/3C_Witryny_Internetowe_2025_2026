<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $wynik =  60;
    $ocena = "";

    if($wynik >= 90 && $wynik <= 100) {
        $ocena = "A";
    } elseif ($wynik >= 80 && $wynik <= 89) {
        $ocena = "B";
    }elseif ($wynik >= 70 && $wynik <= 79) {
        $ocena = "C";
    }elseif ($wynik >= 60 && $wynik <= 69) {
        $ocena = "D";
    }else {
        $ocena = "F";
    }

    echo "Ocena i wynik $ocena , $wynik";
    ?>
</body>
</html>