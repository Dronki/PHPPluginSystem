<?php

$module = $_GET['module'];

$module_dir = 'modules/';

$module_ext = '.module.php';

$scan = scandir($module_dir);
foreach($scan as $file){
    if($file == '.'){
    }else if($file == '..'){ 
    }else{
    echo $file . '<br />';
    
//For debugging purposes...
    if(!$file){
        die("You don't seem to have any modules installed...");
    }else{
        $module_base = $file.$module_ext;
        echo $module_base . '<br />' ;
        if(file_exists($module_dir.$file.'/'.$module_base)){
           if(isset($_GET['function'])){ //Check if there's a defined function
               $function = $_GET['function']; //Assign it to a variable
           }else{
               $function = 'index'; //Let's assign it to index
           }
           include ($module_dir.$file.'/'.$module_base); //Let's include it
           
           $pluginClass = new $plugin;
           
           if(method_exists($pluginClass, $function)){ //Check if function exists
               $pluginClass->$function; //Call the function defined
           }else{
               die("Function not found"); //Show error and then die
           }
        }else{
            die("Module not found");
        }
    } 
    }

}

DEFINE('IS_IN_MODULE', true); //Module controller

?>
