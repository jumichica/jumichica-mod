<?php
require_once(__DIR__ .'/../../../../../conf/Configuracion.php');
require_once(RUTA_PLATAFORMA.'/model/db/conector/ConectorDB.php');

class Model
{
    function __construct(){
        //$this->conector=ConectorDB::get_conector(Variables::$HOST_DB, Variables::$USUARIO_DB, Variables::$CLAVE_DB, Variables::$NOMBRE_DB,ConectorDB::$TIPO_MYSQLI);
    }

    public function ejemplo($datos){
        $sql = "";
        $this->conector->insert($sql);
        $id_entrega = $_SESSION['id'];
        return $datos;
    }
}
