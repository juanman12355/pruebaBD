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
    <body>
');
require_once("../../models/classCoordinador.php");
require_once("../../dao/conectar.php");
$id = $_REQUEST['id'];
$coordinador = new Coordinador();
$datos = $coordinador -> consultarCoordinadorXID($id);
while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
    print('
    <form action="../../controller/controladorCoordinador.php" method="post">
        nombre:<input type="hidden" value="'.$data["id"].'" name="idCoordinadorEdit"><input type="text" value="'.$data["nombre"].'" name="nomCoordinadorEdit"><br>
        apellido:<input type="text" value="'.$data["apellido"].'" name="apeCoordinadorEdit"><br>
        correo:<input type="email" value="'.$data["correo"].'" name="corCoordinadorEdit"><br>
        telefono:<input type="number" value="'.$data["telefono"].'" name="telCoordinadorEdit"><br>
        <input type="submit" name="btnEditCoordinador">
        <input type="reset" name="" id="">
    </form>
    <a href="../viewCoordinador.php"><button>Regresar</button></a>
</body>
</html>
');
}
?>