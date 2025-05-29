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
        $estado = isset($_GET["est"])?$_GET["est"]:0;
        switch($estado){
            case 1:
                $reg = "REGIAO NORTE";
                break;
            case 2:
                $reg = "REGIAO NORDESTE";
                break;
            case 3:
                $reg = "REGIAO CENTRO-OESTE";
                break;
            case 4:
                $reg = "REGIAO SUDESTE";
                break;
            case 5:
                $reg = "REGIAO SUL";
                break;
            default:
                $reg = "REGIAO INVALIDA";
        }
        echo "Voce esta na $reg"
    ?>
</div>
</body>
</html>
 