<?php
    /* Example Controller
     * 2015-10-14
     * Created By OJBA
     * Last Modification 2015-10-14 20:04
     */
      //Cargando Plantillero
      require_once("libs/template_engine.php");
      require_once("models/tipoCuentas.model.php");
      function run(){

        /* inicializacion de datos para la plantilla */
        $arrDatos = array();
        $arrDatos["tipCtaDsc"] = "";
        $arrDatos["tipCtaOpr"] = "";
        $arrDatos["cmbOperadores"][] = array("operador"=>"+",
                                                  "nombre"=>"Débito",
                                                  "seleccionado"=>"");
        $arrDatos["cmbOperadores"][] = array("operador"=>"-",
                                                  "nombre"=>"Crédito",
                                                  "seleccionado"=>"");
        $arrDatos["deleting"] = false;

        /* Se obtienen los datos que viene en la url*/
        $arrDatos["mode"]=$_GET["mode"];


        /* Menjamos los eventos si han realizado un click en los
          botones del formulario */
        /* Si es guardar o nuevo o editar*/
        if(isset($_POST["btnGuardar"])){
            if($arrDatos["mode"]=="INS"){
              /*funcion en el modelo de dato */
              insertarTipoDeCuenta($_POST["tipCtaCod"],$_POST["tipCtaDsc"],$_POST["tipCtaOpr"]);
            }else{
              /*funcion en el modelo de dato */
              actualizarTipoDeCuenta($_POST["tipCtaCod"],$_POST["tipCtaDsc"],$_POST["tipCtaOpr"]);
            }
            /* Esta funcion manda un mensaje al browser y redirige a la página del segundo
            parametro */
            redirectWithMessage("Tipo de Cuenta Guardado Exitosamente","index.php?page=workwith");
        }
        /* Si es eliminar*/
        if(isset($_POST["btnEliminar"])){
          /*funcion en el modelo de dato */
          eliminarTipoDeCuenta($_POST["tipCtaCod"]);
          /* Esta funcion manda un mensaje al browser y redirige a la página del segundo
          parametro */
          redirectWithMessage("Tipo de Cuenta Eliminado Exitosamente","index.php?page=workwith");
        }


        /* Si viene el codigo en la url se procede a obtener la data
        que pertenece a ese código */

        if(isset($_GET["tipCtaCod"])){
          $arrDatos["tipCtaCod"] = $_GET["tipCtaCod"];
          $tmpRegistro = obtenerTipoCuentaPorCodigo($arrDatos["tipCtaCod"]) ;

          $arrDatos["tipCtaDsc"] = $tmpRegistro["tipCtaDsc"];
          $arrDatos["tipCtaOpr"] = $tmpRegistro["tipCtaOpr"];

          /* Se utiliza una utilitario para ahorrarse el marcar a un registro
          como seleccionado */
          $arrDatos["cmbOperadores"] = addSelectedCmbArray(
              $arrDatos["cmbOperadores"],
              "operador",
              $arrDatos["tipCtaOpr"],
              "seleccionado"
          );

          /* Si viene el código no dejaremos que el usuario lo pueda
            editar en el formulario*/
          $arrDatos["enabled"] = false;
        }


        if($arrDatos["mode"]=="INS"){
          /* si es inserción permitimos agregar el código si fuese un
          autonumérico esto no tiene validez*/
          $arrDatos["enabled"] = true;
        }


        if($arrDatos["mode"]=="DLT"){
          /* si es en modo de eliminación no se puede modificar ningún elemento
          pero si debemos establecer que mostrar (sin el combo)*/
          $arrDatos["deleting"] = true;
          if($arrDatos["tipCtaOpr"]=="+"){
            $arrDatos["tipCtaOprDsc"] = "Débito";
          }else{
            $arrDatos["tipCtaOprDsc"] = "Crédito";
          }
        }

        /* renderizamos los datos en la plantilla ejemploform*/
        renderizar("workwithform", $arrDatos);
      }
      run();
     ?>
