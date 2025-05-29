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
        $v = array(
          1=>"A",
          3=>"B",
          6=>"C",
          8=>"D"
        );
        $v[] = "E";
        unset($v[9]);
        print_r($v);
        
    ?>
    </pre>
</div>
</body>
</html>
 