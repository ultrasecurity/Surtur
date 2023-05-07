<?php
    session_start();
    if(!isset($_SESSION['IAm-logined'])){
        header("HTTP/1.1 403");
        exit;
    }


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $data = $_REQUEST['command'];

        file_put_contents("check.txt",$data);
    }


?>

<!-- header("HTTP/1.1 404 Not Found"); -->