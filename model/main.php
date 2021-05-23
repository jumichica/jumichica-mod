<?php
/**
 * Set the main data model for application. If you need use
 * othe model with other data origin please copy and create new class.
 *
 * @author Edwin Ariza <me@edwinariza.com>
 * @copyright Jumichica Tooling Team - jumichica.com
 *
 */

namespace model;

require_once(__DIR__ .'/../../../../../conf/Configuracion.php');
require_once(RUTA_PLATAFORMA.'/model/db/conector/ConectorDB.php');

class Model
{
    function __construct(){
        // Uncomment when you need connect a Database.
        //$this->conector=ConectorDB::get_conector(Variables::$HOST_DB, Variables::$USUARIO_DB, Variables::$CLAVE_DB, Variables::$NOMBRE_DB,ConectorDB::$TIPO_MYSQLI);
    }

    /**
     * A method example to do a insert on database.
     * @param $datos
     * @return mixed
     */
    public function example_method($datos){
        $sql = "";
        $this->conector->insert($sql);
        $id_entrega = $_SESSION['id'];
        return $datos;
    }
} // END OF CLASS model/Main

// OPTION CHOOSER
if(isset($_POST['model_opt'])){
    $model_opt = new Model();
    $opt = $_POST['model_opt'];
    // METHOD SELECTOR
    switch($opt){
        case 1: $model_opt->example_method();break;
        default:die("ERROR: The system don't support the option sent.");
    }
}