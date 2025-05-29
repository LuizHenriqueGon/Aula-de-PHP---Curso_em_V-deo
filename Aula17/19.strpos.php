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
        $frase = "Estou aprendendo PHP no curso em video.";
        $pos = strpos($frase, "PHP");
        //$pos = strpos($frase, "php");  // não funciona
        echo "$frase </br>A palavra PHP aparece na frase $pos vezes.";

    ?>
</div>
</body>
</html>
 