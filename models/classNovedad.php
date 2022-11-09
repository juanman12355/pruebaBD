<?php
class Novedades{
    public $id;
    public $tipo;
    public $descnovedad;
    
    public function borrarNovedades($id){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from novedad where id=?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($id)));
        $conn = null;
        print("la novedad ha sido borrada.");
        print("<br><a href='../../MVC/view/viewNovedades.php'><button>Regresar</button</a>");
    }
    public function actualizarNovedades($tipo, $descnovedad, $id){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "update novedad set tipo = ? , descnovedad = ? where id = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($tipo, $descnovedad, $id)));
        $conn = null;
        print("la novedad ha sido actualizada.");
        print("<br><a href='../../MVC/view/viewNovedades.php'><button>Regresar</button></a>");
    }
    public function agregarNovedades($tipo, $novedad){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into novedad (tipo, descnovedad) values (?, ?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($tipo, $novedad)));
        $conn = null;
        print("la novedad ha sido agregada.");
        print("<br><a href='../../MVC/view/viewNovedades.php'><button>Regresar</button></a>");
    }
    public function consultarNovedades(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from novedad";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    public function consultarNovedadesXID($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from novedad where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($id)));
        return $consulta;
        $conn = null;
    }
}
?>