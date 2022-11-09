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
<body>');
require_once("../../models/classAlumno.php");
require_once("../../dao/conectar.php");
$id = $_REQUEST['id'];
$alumno = new Alumno();
$datos = $alumno -> consultarAlumnoXID($id);
while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
    print('
    <form action="../../controller/controladoralumno.php" method="post">
        nombre:<input type="hidden" value="'.$data["id"].'" name="idAlumnoEdit"><input type="text" value="'.$data["nombre"].'" name="nomAlumnoEdit"><br>
        apellido:<input type="text" value="'.$data["apellido"].'" name="apeAlumnoEdit"><br>
        correo:<input type="email" value="'.$data["correo"].'" name="corAlumnoEdit"><br>
        telefono:<input type="number" value="'.$data["telefono"].'" name="telAlumnoEdit"><br>
        programa:<input type="text" value="'.$data["programa"].'" name="progAlumnoEdit"><br>
        <input type="submit" name="btnEditAlumno">
        <input type="reset" name="" id="">
    </form>
    <a href="../viewAlumno.php"><button>Regresar</button></a>
    </body>
    </html>
    ');
}
?>