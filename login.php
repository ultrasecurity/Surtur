<?php
session_start();
if(isset($_SESSION['IAm-logined'])){
	header('location: panel.php');
	exit;
}

include "./assets/php/config.php"

?>


<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="./assets/css/style.css">
	</head>

	<body>
	  <div class="wrapper">
		<form action="" class="form-signin" method="POST">       
		  <h2 class="form-signin-heading">Please login</h2>
		  <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><br>
		  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     
		  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 


		  <?php
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if(isset($_POST['username']) && isset($_POST['password'])){
					$username = $_POST['username'];
					$password = $_POST['password'];

					if(isset($CONFIG[$username]) && $CONFIG[$username]['password'] == $password){
						$_SESSION['IAm-logined'] = $username;
						echo '<script>location.href="panel.php"</script>';
						exit;
					}else{
						echo '<p style="color:red" ><br>Username or password is incorrenct!</p>';
					}
				}
			}
			
		  ?>



		</form>
	  </div>
	</body>
	</html>