<?php


/**
*@return void
*/

  require_once ('models/application.model.php');
  function run()
  {
    $dataArray=obtenerDatosDeAplicacion();
    renderizar("ficha",$dataArray);
  }
  run();

 ?>
