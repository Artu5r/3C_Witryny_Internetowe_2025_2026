<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles-php.css">
</head>
<body>
    <div>
        <h2>Portfolio</h2>
        <?php
            $zmienna1 = $_POST['imie'];
            echo "" . $zmienna1 . "<br>";

            $zmienna2 = $_POST['nazwisko'];
            echo "" . $zmienna2 . "<br>";

            $zmienna3 = $_POST['data_urodzenia'];
            echo "" . $zmienna3 . "<br>";

            $zmienna4 = $_POST['numer_telefonu'];
            echo "" . $zmienna4 . "<br>";

            $zmienna5 = $_POST['adres_email'];
            echo "" . $zmienna5 . "<br>";

            $zmienna6 = $_POST['adres_zamieszkania'];
            echo "" . $zmienna6 . "<br>";

            $zmienna7 = $_POST['numer_domu'];
            echo "" . $zmienna7 . "<br>";

            $zmienna8 = $_POST['kod_pocztowy'];
            echo "" . $zmienna8 . "<br>";  
        ?>
    </div>
</body>
</html>