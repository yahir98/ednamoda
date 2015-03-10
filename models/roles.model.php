<?php
  /*
  INSERT INTO `roles`
(`idroles`,
`roledes`,
`roleest`)
  */

  require_once("libs/dao.php");

  function obtenerRoles(){

  }
  function obtenerRolesActivos(){
    $roles= array();
    $sqlstr = "Select * from roles where roleest='ACT';";
    $roles = obtenerRegistros($sqlstr);
    return $roles;
  }
  function obtenerRol($roleID){

  }
  function agregarRol($rol){

  }
  function actualizarRol($rol){

  }
  function borrarRol($rolId){

  }
  function obtenerRolesForCombo($selectedRolId){
    $roles = obtenerRolesActivos();
    for($i=0;$i<count($roles); $i++){
      if($roles[$i]["idroles"]==$selectedRolId){
        $roles[$i]["selected"] = "selected";
      } else {
        $roles[$i]["selected"] = "";
      }
    }
    return $roles;
  }

 ?>
