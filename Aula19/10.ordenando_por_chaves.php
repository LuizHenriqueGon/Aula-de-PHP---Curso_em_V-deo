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
        $v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
        print_r($v);
        ksort($v); // Ordena os valores do array em ordem crescente, mantendo a
        // associação com as chaves
        print_r($v);
        
    ?>
    </pre>
</div>
</body>
</html>
 