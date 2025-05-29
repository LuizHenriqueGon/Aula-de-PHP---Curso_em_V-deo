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
        array_unshift($v,"O"); // Adiciona um ou mais elementos no início do array
        print_r($v);
        array_shift($v); // Remove o primeiro elemento do array
        // array_pop($v); // Remove o último elemento do array
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 