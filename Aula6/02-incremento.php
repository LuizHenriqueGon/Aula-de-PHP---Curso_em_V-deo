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
        /*Esse exercicio pretende demonstrar o uso de
         operadores de incremento e decremento*/
        $atual = $_GET["aa"]; // Pegando o valor de ano da URL
        echo "O ano atual é: $atual"; 
        echo "<br> O ano anterior é: " . --$atual;

        

    ?>
</div>
</body>
</html>
 