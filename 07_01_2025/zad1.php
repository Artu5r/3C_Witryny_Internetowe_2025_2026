<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $liczby = [];
    for ($i =0; $i < 20; $i++)
    {
        $liczby[] = rand(1, 100);
    }

    echo "<p>" . implode(", ", $liczby) . "</p>"


    ?>
</body>
</html>