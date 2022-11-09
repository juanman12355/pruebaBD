<?php
include_once("../models/classAlumno.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id'] = 0;
}
if(!isset($_REQUEST["alumno"])){
    if((($_REQUEST['id']!=null))&&($_REQUEST["value"]=="Borra")){
        $id = $_REQUEST['id'];
        $alumno = new Alumno();
        $alumno -> borrarAlumno ( $id );
    }
    elseif(isset($_REQUEST["btnAddAlumno"])){
        header("location:../view/alumno/addAlumno.php");
    }
    elseif(isset($_REQUEST["btnNewAlumno"])){
        $nombre = $_REQUEST["nomAlumno"];
        $apellido = $_REQUEST["apeAlumno"];
        $correo = $_REQUEST["corAlumno"];
        $telefono = $_REQUEST["telAlumno"];
        $programa = $_REQUEST["progAlumno"];
        $alumno = new Alumno();
        $alumno->agregarAlumno($nombre, $apellido, $correo, $telefono, $programa);
    }
    if(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualiza")){
        header("location:../view/alumno/editAlumno.php?id=".$_REQUEST['id']);
        $alumno = new Alumno();
    }
    elseif(isset($_POST["btnEditAlumno"])&&($_REQUEST["btnEditAlumno"]!=null)){
        $id = $_REQUEST["idAlumnoEdit"];
        $nombre = $_REQUEST["nomAlumnoEdit"];
        $apellido = $_REQUEST["apeAlumnoEdit"];
        $correo = $_REQUEST["corAlumnoEdit"];
        $telefono = $_REQUEST["telAlumnoEdit"];
        $programa = $_REQUEST["progAlumnoEdit"];
        $alumno = new Alumno();
        $alumno->actualizarAlumno($nombre, $apellido , $correo , $telefono , $programa, $id);
    }
}
?>