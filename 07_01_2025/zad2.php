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
    for ($i = 0; $i < 6; $i++) {
        $liczby[] = rand(1, 49);
    }

    $data = date("d-m-Y H:i:s");

    $wpis = "$data wylosowano liczby: " . implode(", ", $liczby) . "\n";
    file_put_contents("liczby.txt", $wpis, FILE_APPEND);

    echo file_get_contents("liczby.txt");
    ?>
</body>
</html>