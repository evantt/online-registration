<?php
   include('db.login.php');
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Login</title>
      <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel = "stylesheet" crossorigin="anonymous">
      <link rel="stylesheet" href="CSS/main.css">
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: white;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: black;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            /*font-weight: normal;*/
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:black;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:black;
         }
         
         h2{
            text-align: center;
            color: black;
         }
      </style>
      
   </head>
	
   <body>
      <?php
         require("Layout/header.php");
      ?> 
      
      <h2 style="margin-top: 50px;">Enter Username and Password</h2> 
      
      <div class = "container" style = "background-color: aliceblue; margin-bottom: 55px;">
      
         <!-- <div class = "container form-signin"> -->
            
         <!-- </div> -->

         <form class = "form-signin" role = "form" 
            action = "login.php" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <div style = "font-size: 22px; color : black;">Username : </div>
            <input type = "text" class = "form-control" 
               name = "username" style = "border-color: black;"></br>
               <div style = "font-size: 22px; color : black;">Password : </div>
            <input type = "password" class = "form-control"
               name = "password">
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
         <center>
         Tidak ada account?? Ayo buat sekarang juga!!! <a href="signup.php"> Click here to register</a>
        </center>
         <!--Click here to clean <a href = "logout.php" tite = "Logout">Session.-->
         
      </div> 
      <?php
            require("Layout/footer.php");
        ?>
   </body>
</html>