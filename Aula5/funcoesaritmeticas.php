<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula5</title>
    <link rel = "stylesheet" href = "_css/estilo.css"/>
    <style>
        h2 {
            font: 12pt Arial;
            color:rgb(37, 32, 188);
        }
    </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é: " . abs($v2) . "<br>";
        echo "O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2) . "<br>";
        echo "A raiz de $v1 é: " . sqrt($v1) . "<br>";
        echo "O valor de $v2 arredondado e " .round($v2) ."<br>";// ceiç floor
        echo "A parte inteira de $v2 e " . intval($v2) ."<br>";
        echo "O valor de $v1 em moeda e R$ " . number_format($v1, 2,",", ".") . "<br>";
    ?>
</div>
</body>
</html>