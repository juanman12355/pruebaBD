<?php
print('
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
');
require_once("../../models/classNovedad.php");
require_once("../../dao/conectar.php");
$id = $_REQUEST['id'];
$novedades = new Novedades();
$datos = $novedades -> consultarNovedadesXID($id);
while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
    print('
<body>
    <form action="../../controller/controladorNovedades.php" method="post">
        tipo:<input type="hidden" value="'.$data["id"].'" name="idNovedadesEdit"><input type="text" value="'.$data["tipo"].'" name="tipoNovedadesEdit"><br>
        novedad:<input type="text" value="'.$data["descnovedad"].'" name="NovedadesEdit"><br>
        <input type="submit" name="btnEditNovedades">
        <input type="reset" name="" id="">
    </form>
    <a href="../viewNovedades.php">Regresar</a>
</body>
</html>
');
}
?>