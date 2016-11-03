<?php
    /* Ejemplo Controller
     * 2016-06-22
     * Created By OJBA
     * Last Modification 2016-06-22 19:00
     */
      //Cargando Plantillero
      require_once("libs/template_engine.php");

      require_once("models/tipoCuentas.model.php");

      function run(){
        /* require_once("models/entidad.model.php ") */
        /* Procesamiento */
        $dataPlantilla = array();
        $dataPlantilla["Nombre"] = "";
        $dataPlantilla["tipCtaCod"] = "";
        $dataPlantilla["tipCtaDsc"] = "";
        $dataPlantilla["tipCtaOpr"] ="";

        if(isset($_SESSION["ejemplo_trn"])){
            $dataPlantilla["tipCtaCod"] = $_SESSION["ejemplo_trn"]["tipCtaCod"];
            $dataPlantilla["tipCtaDsc"] = $_SESSION["ejemplo_trn"]["tipCtaDsc"];
            $dataPlantilla["tipCtaOpr"] = $_SESSION["ejemplo_trn"]["tipCtaOpr"];
        }

        $dataPlantilla["cmbOperadores"] = array();
        $dataPlantilla["cmbOperadores"][] = array("operador"=>"",
                                                  "nombre"=>"Todos",
                                                  "seleccionado"=>"");
        $dataPlantilla["cmbOperadores"][] = array("operador"=>"+",
                                                  "nombre"=>"Débito",
                                                  "seleccionado"=>"");
        $dataPlantilla["cmbOperadores"][] = array("operador"=>"-",
                                                  "nombre"=>"Crédito",
                                                  "seleccionado"=>"");

        if(isset($_POST["btnFiltrar"])){
          $dataPlantilla["tipCtaCod"] = $_POST["tipCtaCod"];
          $dataPlantilla["tipCtaDsc"] = $_POST["tipCtaDsc"];
          $dataPlantilla["tipCtaOpr"] = $_POST["tipCtaOpr"];

          $_SESSION["ejemplo_trn"]["tipCtaCod"] = $_POST["tipCtaCod"];
          $_SESSION["ejemplo_trn"]["tipCtaDsc"] = $_POST["tipCtaDsc"];
          $_SESSION["ejemplo_trn"]["tipCtaOpr"] = $_POST["tipCtaOpr"];
        }


        for( $i = 0 ; $i < count($dataPlantilla["cmbOperadores"]); $i++){
          $dataPlantilla["cmbOperadores"][$i]["seleccionado"] = (
                $dataPlantilla["cmbOperadores"][$i]["operador"] === $dataPlantilla["tipCtaOpr"]
            ) ?"selected":"";
        }


        $dataPlantilla["tipoCuentas"] = array();
        $dataPlantilla["tipoCuentas"] = obtenerTiposDeCuenta(
                                            $dataPlantilla["tipCtaCod"] ,
                                            $dataPlantilla["tipCtaDsc"] ,
                                            $dataPlantilla["tipCtaOpr"]
                                          );

        renderizar("workwith", $dataPlantilla);
      }
      run();
     ?>
