<?php
//Verificamos si el archivo de configuración exite.
if(file_exists(__DIR__.'/../../../../conf/Configuracion.php')){
  require_once(__DIR__.'/../../../../conf/Configuracion.php');
}

//Cargamos los CSS asociados a la app.
define("LOAD_CONF",__DIR__."/conf/jumichica.json");
//Cargamos el HEADER de la paltaforma.
if(file_exists(__DIR__."/../../views/header.html")){
  require_once(__DIR__."/../../views/header.html");
}
else{
  //Incluimos los CSS requeridos por el módulo.
  if(defined('LOAD_CONF')){
    $file_module_conf=file_get_contents(LOAD_CONF);
    $module_conf=json_decode($file_module_conf);
    //Leemos la configuración STATIC del módulo
    $HEADER_CSS_MODULE="";
    $HEADER_JS_MODULE="";
    //Leemos los CSS
    $CSS_MODULO=$module_conf->static->css;
    $list_css=explode(",",$CSS_MODULO);
    foreach($list_css as $css_element){
      if($css_element!=''){
        $HEADER_CSS_MODULE.='<link rel="stylesheet" href="static/css/'.$css_element.'">';
      }
    }
    //Leemos los JS
    $JS_MODULO=$module_conf->static->js;
    $list_js=explode(",",$JS_MODULO);
    foreach($list_js as $js_element){
      if($js_element!=''){
        $HEADER_JS_MODULE.='<script src="static/js/'.$js_element.'"></script>';
      }
    }
  }
  //Incluimos los CSS de Módulo en el código
  echo $HEADER_CSS_MODULE;
}
//Incluimos la vista principal del módulo.
require_once(__DIR__."/view/main.html");

//Cargamos el FOOTER de la plataforma.
if(file_exists(__DIR__."/../../views/footer.html")){
  require_once(__DIR__."/../../views/footer.html");
}
else{
  echo $HEADER_JS_MODULE;
}
