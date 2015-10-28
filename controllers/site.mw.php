<?php
//middleware de configuración de todo el sitio

function site_init(){
    mw_estaLogueado();
    addToContext("page_title","Simple MVC Example");
}

site_init();

?>
