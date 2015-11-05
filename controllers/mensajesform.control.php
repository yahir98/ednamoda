<?php
/* Example Controller
     * 2015-10-14
     * Created By OJBA
     * Last Modification 2015-10-14 20:04
     */

      //Cargando Plantillero
      require_once("libs/template_engine.php");
      require_once("models/mensajes.model.php");
      function run(){
        /* require_once("models/entidad.model.php ") */


        /* Procesamiento */
        $mensajeData = array(
            "msgid"=>"",
            "formMode" => "INS",
            "msgdsc"=>""
        );

        if(isset($_POST["formMode"])){
            //Si es post
            manejarElPost($_POST, $mensajeData);
        }else{
            if(isset($_GET["formmode"])){
                // Si es get
                manejarElGet($_GET, $mensajeData);
            }

        }
        renderizar("mensajeform", $mensajeData);
      }

      function manejarElGet($formData, &$mensajeData){
            $mensajeData["formMode"] = $formData["formmode"];
            switch($mensajeData["formMode"]){
                case "INS":
                    break;
                case "UPD":
                case "DEL":
                case "SEL":
                    $Mensaje = obtenerMensajePorID($formData["msgid"]);
                    if($Mensaje){
                        $mensajeData["msgid"] = $Mensaje["msgid"];
                        $mensajeData["msgdsc"] = $Mensaje["msgdsc"];
                    }
                    break;
            }
      }

      function manejarElPost($formData, &$mensajeData){
          $mensajeData["formMode"] = $formData["formMode"];
          switch($mensajeData["formMode"]){
              case "INS":
                  //validacion a nivel de server
                  if(guardarMensaje($formData["msgdsc"]))
                  {
                      redirectWithMessage("Mensaje Guardado Exitosamente",
                                         "index.php?page=mensajes");
                  }
                  break;
              case "UPD":
                  break;
              case "DEL":
                  break;
          }
      }
      run();
?>
