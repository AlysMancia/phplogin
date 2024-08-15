<?php

    include_once 'lib/DataSource.php';

    ?>
<HTML>
<HEAD>
<TITLE>LOGIN</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
	body{
    background-image:url("aurora.jpg");
    background-position: center; 
  	background-repeat: no-repeat;
    }
	.sign-up-container{
 	 background: #63b3e9;
    background: -webkit-linear-gradient(to right, #01463a, #08414b);
    background: linear-gradient(to right, #07c7e9, #24917e);
}
	.form-label{
	color:white !important;
}
	#login-btn{
	color:white;
	font-weight:bold;
	background: #000000;
}
</style>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php" style="color:white;">Sign up</a>
			</div>
	
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					
					<div class="signup-heading"  style="color:white;">Login</div>
					<?php

    if(isset($_POST['register'])){

      header("Location:user-registration.php");

    }




    if(isset($_POST['login-btn'])){

      $username = $_POST['username'];

      $password = $_POST['login-password'];



      $select = mysqli_query($conn, "SELECT * FROM tbl_member WHERE username = '$username' AND password = '$password'");

      $row = mysqli_fetch_array($select);



      if(is_array($row)){

        header("Location:home.php");

      }else{

        $message = "<p style='color:red;'>Incorrect Username or Password !</p>";

        echo $message;

    }

  }
  ?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn btn-dark" type="submit" name="login-btn"
							id="login-btn" value="Login Now">
					</div>
				</form>
			</div>
		</div>
	</div>
</BODY>
</HTML>
