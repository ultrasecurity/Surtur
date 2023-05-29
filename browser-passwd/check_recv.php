<?php
session_start();
if(!isset($_SESSION['IAm-logined'])){
    header("HTTP/1.1 403");
    exit;
}


function clear_file($filename){
    
    file_put_contents($filename,"");
    

}

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['data'] == "Send_Me_Data"){
    $check_file = file_get_contents("recv.txt");

    if(!$check_file == ""){
        echo file_get_contents("dumps/".$check_file);
        clear_file("recv.txt");
        
            
    }else{
        echo "Data isn't Exist :/";
    }
}


?>