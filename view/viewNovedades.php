<?php
require_once("../models/classNovedad.php");
$novedades = new Novedades();
$datos = $novedades->consultarNovedades();
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
    <form action='../controller/controladorNovedades.php'>
        <input type='submit' id='btnAddNovedades' name='btnAddNovedades' value='Agregar'>
    </form>
    <table id='table_id' class='display' style='width:100%' method='post'>
        <thead>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Novedad</th>
            <th></th>
            <th></th>
        </tr>
        </thead>");
        while($data = $datos->fetch(PDO::FETCH_ASSOC)){
            print("
            <tbody>
                <tr>
                    <td>".$data['id']."</td>
                    <td>".$data['tipo']."</td>
                    <td>".$data['descnovedad']."</td>
                    <form action='../controller/controladorNovedades.php'>
                        <td><a href='../controller/controladorNovedades.php?id=".$data['id']."&value=Borra'><input type='button' name='btnBorrarNovedades' value='Borrar'></a></td>
                        <td><a href='../controller/controladorNovedades.php?id=".$data['id']."&value=Actualiza'><input type='button' name='btnActualizarNovedades' value='Actualizar'></a></td>
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
</script>")
?>