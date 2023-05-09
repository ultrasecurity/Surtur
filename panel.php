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
    <title>Surtur Project</title>

</head>


<body class="bg-light">

    <!-- header -->
        <?php  echo $header; ?>

    <!-- header end -->
    <div class="mt-2 d-flex justify-content-center ">
        <p id="path" class="text-danger"> Welcome To Surtur Project</p>
    </div>


</body>


</html>

