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
       $frase = "Aprenda PHP e desenvolva um site em pouco tempo.";
       $count = str_word_count($frase, 1);
       //echo "Palavras: $count"; // echo "Palavras: " . str_word_count($frase, 0);
       print_r($count); // imprime o conteúdo de uma variável
    ?>
</div>
</body>
</html>
 