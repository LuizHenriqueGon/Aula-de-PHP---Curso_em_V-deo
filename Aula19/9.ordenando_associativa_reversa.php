<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <?php
        $v = array("A","J","M","X","K");
        print_r($v);
        arsort($v); // Ordena os valores do array em ordem crescente, mantendo a 
        // associação com as chaves
        // ou seja, os índices dos elementos são preservados
        print_r($v);
        
    ?>
    </pre>
</div>
</body>
</html>
 