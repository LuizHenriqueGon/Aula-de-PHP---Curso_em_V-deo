<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "_css/estilo.css"/>
    <title>Document</title>
</head>
<body>
<div>
    <?php
        /*$n1 = 3;
        $n2 = 2;*/
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        $s = $n1 + $n2;
        $m = ($n1 + $n2) / 2;
        echo "A soma vale ".($n1 + $n2);
        echo "<br/>A subracao vale ".($n1 - $n2);
        echo "<br/>A multiplicacao vale ".($n1 * $n2);
        echo "<br/>A divisao vale ".($n1 / $n2);
        echo "<br/>A modulo vale ".($n1 % $n2);
        echo "<br/>A media vale $m";
        

    ?>
</div>
</body>
</html>