<?php

    include_once 'lib/DataSource.php';



  if(count($_POST) >0){ mysqli_query($conn,"UPDATE tbl_member set username ='". $_POST['username'] . "', email='". $_POST['email'] . "', 
                    password='". $_POST['signup-password'] . "' WHERE id='" . $_GET['id'] ."'");

        $message = "<p style='color:green;'>Record Modified Successfully !</p>";
        

      }

 ?>
<HTML>
<HEAD>
<TITLE> USER PROFILE</TITLE>

<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
</HEAD>
<style>
body{
    background-image:url("aurora.jpg");
    background-position: center;
  	background-repeat: no-repeat; 
 	background-size: cover; 
    }
.sign-up-container{
	background: #63b3e9;
    background: -webkit-linear-gradient(to right, #01463a, #08414b);
    background: linear-gradient(to right, #07c7e9, #24917e);
}
.form-label{
color:white !important;
}
#signup-btn{
	color:white;
	font-weight:bold;
	background: #000000;
}
</style>
<BODY>
	
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="index.php" style="color:white">Login</a>
			</div>
			<div class="">
				<form name="sign-up" action="" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading" style="color:white">UPDATE PROFILE</div>
				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>	<div class="error-msg" id="error-msg"></div>

		<FORM action="" name="" method = "POST" >
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
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="signup-password" id="signup-password">
						</div>
					</div>

					</div>
					<div class="row">
						<input class="btn" type="submit" name="Update"
							id="Update" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</FORM>
<?php
if(isset($_POST['Update'])){




header("Location:home.php");

}