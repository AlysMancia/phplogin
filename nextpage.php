<?php
    session_start();

?>
<!DOCTYPE html>

<html>  
<head>  
    <title>PHP login system</title>   
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  

    <div id = "frm">  
        <form action="login.php" name="" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" value = "<?php echo $_SESSION['username'];?>" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "text" id ="pass" name  = "pass" value = "<?php echo $_SESSION['password'];?>"/>  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" name = "logout" value = "logout" />  
            </p>  
        </form>  
    </div>  

    <?php


    if(isset($_POST['logout'])){
        header("Location:login.php");
    }

    ?>

    </body>     
</html> 