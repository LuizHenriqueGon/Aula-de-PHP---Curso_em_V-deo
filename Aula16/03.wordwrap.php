<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $t = "Aqui temos um texto gigante criando pelo PHP e vai mostrar o funcionamento da função wordwrap";
        /*$r = wordwrap($t , 20, "</br>");*/
        $r = wordwrap($t , 5, "</br>\n", false); // false para não quebrar a linha
        echo $r;
    ?>
</div>
</body>
</html>
 