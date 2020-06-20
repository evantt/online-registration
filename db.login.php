<?php
session_start();

require "config.php";
// connect to database
// $db = mysqli_connect('localhost', 'root', '', 'multi_login');

// variable declaration
$username = "";
$password = "";
$status = "";
$bukti_pembayaran = "";
$errors   = array();
$msg = "";

// call the register() function if register_btn is clicked
if (isset($_POST['login'])) {
	login();
}

// REGISTER USER
function login(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $username, $password, $name_error;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$password    =  e($_POST['password']);
	$status   =  e($_POST['status']);
	$bukti_pembayaran    =  e($_POST['bukti_pembayaran']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($password)) { 
		array_push($errors, "Password is required"); 
	}

	// login user if there are no errors in the form
	if (count($errors) == 0) {
        $sql_u = "SELECT * FROM siswa WHERE username='$username' AND password='$password'";
		$res_u = mysqli_query($conn, $sql_u);
        if (mysqli_num_rows($res_u) != 1) {
            $name_error = "Username or Password is incorrect."; 		
        } else{
			$_SESSION['valid'] = true;
			//$_SESSION['timeout'] = time();
			$_SESSION['username'] = $username;			
			$_SESSION['password'] = $password;	
			$_SESSION['status'] = $status;	
			$_SESSION['bukti_pembayaran'] = $bukti_pembayaran;	
			header('location: home.php');
        }						
	}
}

// escape string
function e($val){
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	