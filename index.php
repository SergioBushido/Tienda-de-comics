<?php
require_once 'autoload.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

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
