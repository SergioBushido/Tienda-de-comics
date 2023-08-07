<?php
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

function show_error(){
    $error = new ErrorController();
    $error->index();
}
/*
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
} else {
    // Si no se proporciona el controlador, mostrar los productos destacados por defecto
    $nombre_controlador = 'ProductoController';
    $action = 'index';
}

if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();
    
    if(method_exists($controlador, $action)){
        $controlador->$action();
    } else {
        echo "La pagina que buscas no existe";
    }
} else {
    echo "La pagina que buscas no existe";
}

require_once 'views/layout/footer.php';
*/


if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';

    
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){   
    $nombre_controlador = controller_default;
}else{
    show_error();
    exit();
}

if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
        
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){  
         $action_default = action_default;
         $controlador->$action_default();
    }else{
       show_error();
    }
}else{
    show_error();
}

require_once 'views/layout/footer.php';
 
 