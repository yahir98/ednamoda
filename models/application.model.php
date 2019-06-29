<?php

require_once "libs/dao.php";
/*
*@return array
*/

function obtenerDatosDeAplicacion()
{

$sqlstr="SELECT * FROM application;";
return obtenerUnRegistro($sqlstr);

}


 ?>
