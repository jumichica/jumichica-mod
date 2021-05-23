<?php
/**
 * Set the methods to process data or requests, maybe you need call this class from other files or ajax.
 *
 * @author Edwin Ariza <me@edwinariza.com>
 * @copyright Jumichica Tooling Team - jumichica.com
 *
 */
class Controller
{
    /**
     * Controller constructor.
     */
    public function __construct(){

    }

    /**
     * Example method.
     * @param $data
     */
    public function example_method($data){

    }
}// END OF CLASS
// OPTION CHOOSER
if(isset($_POST['controller_opt'])){
    $controller_opt = new Controller();
    $opt=$_POST['controller_opt'];
    // METHOD SELECTOR
    switch($opt){
        case 1: $controller_opt->example_method();break;
        default:die("ERROR: The system don't support the option sent.");
    }
}