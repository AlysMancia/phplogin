
<!DOCTYPE html>

<html>  
<head>  
    <title>PHP login system</title>   
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  

    <div id = "frm">  
        <h1>Login</h1>  
        <form action="login.php" name="" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" name = "login" value = "Login" />  
            </p>  
        </form>  
    </div>  

    <?php
    session_start();

    
    $username = "admin";
    $password = "password";

    if(isset($_POST['login'])){
     if($_POST['user'] == $username && $_POST['pass'] == $password){

            $_SESSION['username'] = $_POST['user'];
            $_SESSION['password'] = $_POST['pass'];

            header("Location:nextpage.php");

    }else{
        echo "<script>alert('username or password incorrect!')</script>";
    }
    }

    ?>

    </body>     
</html> 