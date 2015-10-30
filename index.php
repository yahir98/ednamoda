<?php

    session_start();

    require_once("libs/utilities.php");

    $pageRequest = "home";

    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }

    //Incorporando los midlewares son codigos que se deben ejecutar
    //Siempre
    require_once("controllers/verificar.mw.php");
    require_once("controllers/site.mw.php");
    //Este switch se encarga de todo el enrutamiento

    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;
<<<<<<< HEAD
        case "productos":
            //llamar al controlador
            require_once("controllers/productos.control.php");
            break;
        /*case "login":
=======
        case "menu":
            require_once("controllers/menu.control.php");
            break;
        case "login":
>>>>>>> negocios
            require_once("controllers/login.control.php");
            break;
        case "registro":
            require_once("controllers/registro.control.php");
            break;
<<<<<<< HEAD
        //para agregar una nueva pagina
        // agregar otro case
        case "categorias":
            require_once("controllers/categorias.control.php");
            break;
        case "category":
            require_once("controllers/category.control.php");
=======
        case "althome":
            require_once("controllers/althome.control.php");
>>>>>>> negocios
            break;
        //Mantenimiento de Unidades
        case "unidades":
            require_once("controllers/mnt/unidades.control.php");
            break;
        case "unidad":
                require_once("controllers/mnt/unidad.control.php");
                break;
        //Mantenimiento de Unidades
        case "empresas":
            require_once("controllers/mnt/empresas.control.php");
            break;
        case "empresa":
            require_once("controllers/mnt/empresa.control.php");
            break;*/
        default:
            require_once("controllers/error.control.php");

    }
?>
