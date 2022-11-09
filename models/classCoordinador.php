<?php
class Coordinador{
    public $id;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;

    public function borrarCoordinador($id){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from coordinador where id=?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($id)));
        $conn = null;
        print("el registro ha sido borrado.");
        print("<br><a href='../../MVC/view/viewCoordinador.php'><button>Regresar</button</a>");
    }
    public function actualizarCoordinador($nombre , $apellido , $correo, $telefono, $id)
    {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "update coordinador set nombre = ? , apellido = ? , correo = ? , telefono = ? where id = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($nombre, $apellido, $correo, $telefono, $id)));
        $conn = null;
        print("el coordinador ha sido editado");
        print("<br><a href='../../MVC/view/viewCoordinador.php'><button>Regresar</button></a>");
    }
    public function agregarCoordinador($nombre , $apellido , $correo, $telefono){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into coordinador (nombre, apellido, correo, telefono) values (?, ?, ?, ?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($nombre, $apellido, $correo, $telefono)));
        $conn = null;
        print("El coordinador ha sido agregado");
        print("<br><a href='../../MVC/view/viewCoordinador.php'><button>Regresar</button></a>");
    }
    public function consultarCoordinador(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from coordinador";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    public function consultarCoordinadorXID($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from coordinador where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($id)));
        return $consulta;
        $conn = null;
    }
};
?>