<?php
session_start();
if(!isset($_SESSION['IAm-logined'])){
	header('location: login.php');
	exit;
}


include "./assets/php/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/updater.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <title>Terminal</title>

</head>


<body class="bg-light">

    <!-- header -->
        <?php  echo $header; ?>

    <!-- header end -->
    <div class="mt-2 d-flex justify-content-center ">
        <p id="path" class="m-1 w-50"> Welcome To Surtur Project</p>
    </div>


</body>


</html>

