<?php
require 'models/security/security.model.php';
require 'models/mantenimientos/programas.model.php';

function generarMenu($usercod)
{
    $menu = array();
    if(isAuthorized('admin',$usercod))$menu[] = array("mdlprg"=>"admin","mdldsc"=>"Mis Casos");
    if(isAuthorized('portafolios',$usercod))$menu[] = array("mdlprg"=>"portafolios","mdldsc"=>"Casos");
    if(isAuthorized('portafolios',$usercod))$menu[] = array("mdlprg"=>"consultas","mdldsc"=>"Consultas");
    if(isAuthorized('mnt',$usercod))$menu[] = array("mdlprg"=>"mnt","mdldsc"=>"Mantenimientos");
    addToContext('appmenu', $menu);
}

function isAuthorized($assetCode, $usercod)
{
    $programa = obtenerProgramaPorCodigo($assetCode);
    if (count($programa) == 0) {
        insertPrograma($assetCode, $assetCode, 'ACT', 'PRG');
    }
    if ($_SESSION["userType"] == 'ADM') {
        return true;
    }
    return estaAutorizado($usercod, $assetCode);
}

function hasAccess($functionCode, $usercod)
{
    $programa = obtenerProgramaPorCodigo($assetCode);
    if (count($programa) == 0) {
        insertPrograma($assetCode, $assetCode, 'ACT', 'FNC');
    }
    if ($_SESSION["userType"] == 'ADM') {
        return true;
    }
    return estaAutorizado($usercod, $assetCode);
}
?>
