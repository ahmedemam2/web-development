<?php


    function dump_Die($value){
        echo"<pre>";
        var_dump($value);
        echo"</pre>";
        die();
    }
    
    function uriS($value){
        return $_SERVER['REQUEST_URI'] === $value;
    }

?>