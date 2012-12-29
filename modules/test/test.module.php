<?php

if(!defined('IS_IN_MODULE')){ die("NO DIRECT FILE ACCESS!"); }

class test {
    
    function index(){ //If no specific function is called, let's call the index-function (default)
        print("Test-module!");
    }
    
    function derp(){ //plugin.php?function=derp
        print("derp");
    }
}

?>
