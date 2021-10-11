<?php

$uri = $_SERVER['REQUEST_URI'];

$routes = explode("/", $uri);

if($routes[2] == "home" || $routes[2] == "HOME"){
    if(count($routes) == 3){
        echo "view home";
    }else if(count($routes) == 4){
        echo "view home";
    }else{
        echo "Error.";
    }
}else if($routes[2] == "clientes"){
    if(count($routes) == 3){
        echo "view clientes";
    }else if(count($routes) == 4){
        if($routes[3] == ""){
            echo "view clientes";
        }else if($routes[3] == "registrar"){
            echo "registrar";
        }else{
            echo "Error.";
        }
    }else if(count($routes) == 5){
        $ref = $routes[4];
        $ref = (int)$ref;
        if($ref){
            if($routes[3] == "modificar"){
                echo "modificar {$ref}";
            }else if($routes[3] == "eliminar"){
                echo "eliminar {$ref}";
            }
        }else{
            echo "Error.";
        }
    }else{
        echo "Error.";
    }
}else if($routes[2] == "asesores"){
    if(count($routes) == 3){
        echo "view asesores";
    }else if(count($routes) == 4){
        if($routes[3] == ""){
            echo "view asesores";
        }else if($routes[3] == "registrar"){
            echo "registrar";
        }else{
            echo "Error.";
        }
    }else if(count($routes) == 5){
        $ref = $routes[4];
        $ref = (int)$ref;
        if($ref){
            if($routes[3] == "modificar"){
                echo "modificar {$ref}";
            }else if($routes[3] == "eliminar"){
                echo "eliminar {$ref}";
            }
        }else{
            echo "Error.";
        }
    }else{
        echo "Error.";
    }
}else if($routes[2] == "agendamientos"){
    if(count($routes) == 3){
        echo "view agendamientos";
    }else if(count($routes) == 4){
        if($routes[3] == ""){
            echo "view clientes";
        }else if($routes[3] == "registrar"){
            echo "registrar";
        }else{
            echo "Error.";
        }
    }else if(count($routes) == 5){
        $ref = $routes[4];
        $ref = (int)$ref;
        if($ref){
            if($routes[3] == "modificar"){
                echo "modificar {$ref}";
            }else if($routes[3] == "eliminar"){
                echo "eliminar {$ref}";
            }
        }else{
            echo "Error.";
        }
    }else{
        echo "Error.";
    }
}
