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
        $cont = substr_count($frase, "PHP");
        print("PHP aparece $cont vezes.");
    ?>
</div>
</body>
</html>
 