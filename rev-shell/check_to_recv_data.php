<?php
session_start();
if(!isset($_SESSION['IAm-logined'])){
    header("HTTP/1.1 403");
    exit;
}


function clear_file($filename){
    
    file_put_contents($filename,"");
    

}

$check_file = file_get_contents("result.txt");

if(!$check_file == ""){
    clear_file("check.txt");
    echo $check_file;
    clear_file("result.txt");
    
        
}

?>