<?php

  require_once('libs/dao.php');

    function obtenerTiposDeCuenta( $tipCtaCod, $tipCtaDsc, $tipCtaOpr){
    $sqlstr = "";
    if( $tipCtaCod == "" && $tipCtaDsc == "" && $tipCtaOpr == ""){
        $sqlstr = "select * from tipoCuentas;";
    }else{
      $whereArray = array();
      if($tipCtaCod !== ""){
        $whereArray[] = sprintf("tipCtaCod = %d ", $tipCtaCod);
      }
      if($tipCtaDsc !== ""){
        $whereArray[] = sprintf("tipCtaDsc like '%s' ", $tipCtaDsc.'%');
      }
      if($tipCtaOpr !== ""){
        $whereArray[] = sprintf("tipCtaOpr = '%s' ", $tipCtaOpr);
      }

      $sqlstr = sprintf("select * from tipoCuentas where %s ;",
                            implode($whereArray," and ")
                        );
    }

    $tipoCuentas = array();
    $tipoCuentas = obtenerRegistros($sqlstr);
    return $tipoCuentas;
  }

  function obtenerTipoCuentaPorCodigo($tipCtaCod){
    $registro = array();

    $sqlstr = "select * from tipoCuentas where tipCtaCod=%d;";
    $registro = obtenerUnRegistro(sprintf($sqlstr,$tipCtaCod));
    return $registro;
  }

  function actualizarTipoDeCuenta($tipCtaCod, $tipCtaDsc, $tipCtaOpr){
    $updSql = "update tipoCuentas set tipCtaDsc='%s', tipCtaOpr='%s' where tipCtaCod=%d;";
    $result =  ejecutarNonQuery(sprintf($updSql, $tipCtaDsc, $tipCtaOpr, $tipCtaCod));
    return ($result > 0) && true;
  }

  function eliminarTipoDeCuenta($tipCtaCod){
    $delSql = "delete from tipoCuentas where tipCtaCod=%d;";
    $result =  ejecutarNonQuery(sprintf($delSql, $tipCtaCod));
    return ($result > 0) && true;
  }

  function insertarTipoDeCuenta($tipCtaCod, $tipCtaDsc, $tipCtaOpr){
    $insSql = "insert tipoCuentas (tipCtaCod, tipCtaDsc, tipCtaOpr) values(%d, '%s','%s');";
    $result =  ejecutarNonQuery(sprintf($insSql, $tipCtaCod, $tipCtaDsc, $tipCtaOpr));
    return ($result > 0) && true;
  }

 ?>
