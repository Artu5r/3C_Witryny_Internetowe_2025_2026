<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $dec = (int)readline("Podaj liczbe dziesiętną: ");
    $bin="";
    for($n=$dec; $n>0; $n=intdiv($n, 2)) {
        $bin = ($n%2) . $bin;
    }
    if($bin== " ")
        $bin = "0";

    echo "Binarne: $bin \n"
    ?>
</body>
</html>