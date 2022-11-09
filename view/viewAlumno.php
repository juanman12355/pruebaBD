<?php
require_once("../models/classAlumno.php");
$alumno = new Alumno();
$datos = $alumno->consultarAlumno();
print("
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css'>
</head>
<body>
    <form action='../controller/controladorAlumno.php' method='post'>
        <input type='submit' id='btnAddAlumno' name='btnAddAlumno' value='Agregar'>
    </form>
    <table id='table_id' class='display' style='width:100%' method='post'>
        <thead>
            <tr> 
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Programa</th>
                <th></th>
                <th></th>
            </tr>

        </thead>");
    while($data = $datos->fetch(PDO::FETCH_ASSOC)){
        print("
        <tbody>
            <tr>
                <td>".$data['id']."</td>
                <td>".$data['nombre']."</td>
                <td>".$data['apellido']."</td>
                <td>".$data['correo']."</td>
                <td>".$data['telefono']."</td>
                <td>".$data['programa']."</td>
                <form action='../controller/controladorAlumno.php'>
                    <td><a href='../controller/controladorAlumno.php?id=".$data['id']."&value=Borra'><input type='button' name='btnBorrarAlumno' value='Borrar'></a></td>
                    <td><a href='../controller/controladorAlumno.php?id=".$data['id']."&value=Actualiza'><input type='button' name='btnActualizarAlumno' value='Actualizar'></a></td>
                </form>
            </tr>
        </tbody>
        ");
    }
    print(" 
    </table>
</body>
</html>
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script type='text/javascript' charset='utf8' src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js'></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable(
        );
    });
</script>
");
?>