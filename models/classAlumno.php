<?php
class Alumno{
    public $id;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;

    public function borrarAlumno($id){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from alumno where id=? ";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($id)));
        $conn = null;
        print("el registro ha sido borrado.");
        print("<br><a href='../../MVC/view/viewAlumno.php'>regresar</a>");
    }
    public function actualizarAlumno($nombre, $apellido, $correo, $telefono, $programa, $id){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "update alumno set nombre = ? , apellido = ? , correo = ? , telefono = ? , programa = ? where id = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($nombre, $apellido, $correo, $telefono, $programa, $id)));
        $conn = null;
        print("el alumno $nombre $apellido, con correo $correo ha sido editado");
        print("<br><a href='../../MVC/view/viewAlumno.php'><button>Regresar</button></a>");
    }
    public function agregarAlumno($nombre , $apellido , $correo, $telefono, $programa){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into alumno (nombre, apellido, correo, telefono, programa) values (?, ?, ?, ?, ?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($nombre, $apellido, $correo, $telefono, $programa)));
        $conn = null;
        print("El alumno ha sido agregado");
        print("<br><a href='../../MVC/view/viewAlumno.php'><button>Regresar</button></a>");
    }
    public function consultarAlumno(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from alumno";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    public function consultarAlumnoXID($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from alumno where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($id)));
        return $consulta;
        $conn = null;
    }
};
?>