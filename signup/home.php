<?php

    include_once 'lib/DataSource.php';

    $result = mysqli_query($conn,"SELECT * FROM tbl_member");

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>

<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
    <link href="/assets/css/dash.css" type="text/css"
	rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
    body{
        background-image:url("aurora.jpg");
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;

    }
  table{

    background-color: -webkit-linear-gradient(to right, #01463a, #08414b);
    background: linear-gradient(to right, #07c7e9, #24917e);
    top: 20%;
    left: 10%;
    width: 80%;
    box-shadow: 5px 5px 20px rgb(16, 116, 119);  
    font-family: 'Times New Roman', Times, serif;
    color: white;
    
}

th{ /*table username*/
background-color: rgb(5, 133, 133);
color: white;
font-family: 'Courier New', Courier, monospace;

}
/*table*/
tr td{ 
width: 10px;
height: 20px;
color: black;
}

tr:nth-child(odd){
background-color: rgb(147, 198, 240);

}

tr a{
text-decoration: none;;
color: rgb(255, 255, 255);
background-color: rgb(7, 228, 209);
}
    
</style>
</HEAD>
<BODY>

	<div class="phppot-container" >
        <div class="col btn btn-danger" style="margin-top:5% !important;"> Dashboard</div>
        <div class="page-header">
		</div>
		<div class="page-content jumbotron" style="  background-color: red;
 background: -webkit-linear-gradient(to right, #01463a, #08414b);
    background: linear-gradient(to right, #07c7e9, #24917e);">
  <h4 style="color:white; font-weight:bold;">Glad to see you here !</h4></div>


    <?php
        if(mysqli_num_rows($result) > 0) {
    ?>
<div class="container-fluid section3">


    <table>
        <tr>
            <th>id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><a href="update.php? id=<?php echo $row["id"]; ?>">UPDATE</a></td>

                </tr>

              

                <?php
                    $i++;
                }
                    ?>

           
            </table>
        <?php         
             }
                else{
                    echo "No Result Found";
                }
                ?>
         
           
      
    </div>
  
  <span class="login-signup btn btn-warning"><a href="logout.php" style="color:white">Logout</a></span>

	<div class="error-msg" id="error-msg"></div>



   
