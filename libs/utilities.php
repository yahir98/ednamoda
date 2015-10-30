<?php
    $global_context = array();

    function addToContext($key,$value){
        global $global_context;
        $global_context[$key] = $value;
    }

    function addCssRef($uri){
        global $global_context;
        if(isset($global_context["css_ref"])){
            $global_context["css_ref"][] = array("uri"=>$uri);
        }else{
            $global_context["css_ref"] = array(array("uri"=>$uri));
        }
    }
    function addJsRef($uri, $first = true){

    }

?>
