<?php
include_once("../models/classNovedad.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id'] = 0;
}
if(!isset($_REQUEST["novedad"])){
    if(($_REQUEST['id'] !=null)&&($_REQUEST["value"] == "Borra")){
        $id = $_REQUEST['id'];
        $novedad = new Novedades();
        $novedad->borrarNovedades($id);
    }
    elseif(isset($_REQUEST["btnAddNovedades"])){
        header("location:../view/novedades/addNovedades.php");
    }
    elseif(isset($_REQUEST["btnNewNovedades"])){
        $tipo = $_REQUEST["tipoNovedades"];
        $novedad = $_REQUEST["Novedades"];
        $novedades = new Novedades();
        $novedades->agregarNovedades($tipo, $novedad);
    }
    elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualiza")){
        header("location:../view/novedades/editNovedades.php?id=".$_REQUEST['id']);
        $novedades = new Novedades();
    }
    elseif(isset($_REQUEST["btnEditNovedades"])&&($_REQUEST["btnEditNovedades"]!=null)){
        $id = $_REQUEST["idNovedadesEdit"];
        $tipo=$_REQUEST["tipoNovedadesEdit"];
        $descnovedad = $_REQUEST["NovedadesEdit"];
        $novedades = new Novedades();
        $novedades->actualizarNovedades($tipo, $descnovedad, $id);
    }
}
?>