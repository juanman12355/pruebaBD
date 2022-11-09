<?php
include_once("../models/classCoordinador.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id'] = 0;
}
if(!isset($_REQUEST["coordinador"])){
    if((($_REQUEST['id'] !=null))&&($_REQUEST["value"] == "Borra")){
        $id = $_REQUEST['id'];
        $coordinador = new Coordinador();
        $coordinador->borrarCoordinador($id);
    }
    elseif(isset($_REQUEST["btnAddCoordinador"])){
        header("location:../view/coordinador/addCoordinador.php");
    }
    elseif(isset($_REQUEST["btnNewCoordinador"])){
        $nombre = $_REQUEST["nomCoordinador"];
        $apellido = $_REQUEST["apeCoordinador"];
        $correo = $_REQUEST["corCoordinador"];
        $telefono = $_REQUEST["telCoordiandor"];
        $coordinador = new Coordinador();
        $coordinador->agregarCoordinador($nombre, $apellido, $correo, $telefono);
    }
    elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualiza")){
        header("location:../view/coordinador/editCoordinador.php?id=".$_REQUEST['id']);
        $coordinador = new Coordinador();
    }
    elseif(isset($_POST["btnEditCoordinador"])&&($_REQUEST["btnEditCoordinador"]!=null)){
        $id = $_REQUEST["idCoordinadorEdit"];
        $nombre = $_REQUEST["nomCoordinadorEdit"];
        $apellido = $_REQUEST["apeCoordinadorEdit"];
        $correo = $_REQUEST["corCoordinadorEdit"];
        $telefono = $_REQUEST["telCoordinadorEdit"];
        $coordinador = new Coordinador();
        $coordinador->actualizarCoordinador($nombre, $apellido, $correo, $telefono, $id);
    }
}
?>