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
        function soma ($a, $b) {
          $s = $a + $b;
          echo "<p>A soma entre $a e $b é $s.</p>";
        }
        soma(5, 3);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma($x, $y);
    ?>
</div>
</body>
</html>
 