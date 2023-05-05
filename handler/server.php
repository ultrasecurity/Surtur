<?php

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['data'])){

    $data = $_POST['data'];
    file_put_contents("data.txt",$data);


}

elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES['document'])) {
    echo "dsdd";
} 

else{

    header("HTTP/1.1 404 Not Found");
}   


?>