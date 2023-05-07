<?php
		
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $data = $_REQUEST['get_data'];
        file_put_contents("result.txt",$data);

        
    }elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo file_get_contents("check.txt");
    }
        
?>