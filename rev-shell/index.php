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
    <script src="../assets/js/updater.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <title>Terminal</title>

</head>


<body class="bg-light">

    <!-- header -->
        <?php  echo $header; ?>

    <!-- header end -->
    <div class="mt-2 d-flex justify-content-center ">
        <p id="path" class="form-control m-1 w-50"> path is loading....</p>
    </div>

    <div class="mt-2 d-flex justify-content-center ">
        <input autofocus placeholder="Type Command" type="text" id="cmd" class="form-control m-1 w-50">    
    </div>
    

    <div class="mt-2 d-flex justify-content-center">
        <textarea class="form-control w-50" placeholder="result ..." id="result" rows="10" ></textarea>
    </div>


</body>

<script>

    $(document).ready(function(){
        request("give_me_path")
        
        
    })
    
    $("#cmd").keypress(function(data){
        if(data.key == "Enter"){

            if($("#cmd").val() == "clear"){

                $("#result").text("")
                $("#cmd").val("")
            }
            
            else if($("#cmd").val().includes("sudo")){
                $("#result").text("not support sudo ):")
                $("#cmd").val("")
            }
            
            else{

                request($("#cmd").val())
                $("#cmd").val("")
            }   

        }
        
    })


</script>


</html>

