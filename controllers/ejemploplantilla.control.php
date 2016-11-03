<?php
    /* Example Controller
     * 2015-10-14
     * Created By OJBA
     * Last Modification 2015-10-14 20:04
     */
      //Cargando Plantillero
      require_once("libs/template_engine.php");

      function run(){
        /* require_once("models/entidad.model.php ") */
        /* Procesamiento */
        $data = array();
        $data["nombre"] = "Un Nombre Comun";
        $data["apellido"] = "Un Apellido Adicional";

        $generos = array();
        $generos[] = array("codigo"=>"M","Descripcion"=>"Masculino");
        $generos[] = array("codigo"=>"F","Descripcion"=>"Femenino");

        $data["generos"] = $generos;



        $errores = array();
        $errores[] = array("error"=>"Este es un error");
        $errores[] = array("error"=>"Este es otro error");

        $data["errores"] = $errores;

        //$data["showErrores"] = 0;

        renderizar("ejemploplantilla", $data );

      }

      run();
     ?>
