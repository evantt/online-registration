<?php 
session_start();
require "config.php";
// connect to database
// $db = mysqli_connect('localhost', 'root', '', 'multi_login');

// variable declaration

$bukti_pembayaran = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['bayar'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $username, $name_error;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	
	//$bukti_pembayaran = e($_POST['bukti_pembayaran']);
	// form validation: ensure that the form is correctly filled
	// if (empty($bukti_pembayaran)) { 
	// 	array_push($errors, "Belum Lengkap"); 
	// }

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$uname = $_SESSION['username'];
        $sql_u = "SELECT * FROM siswa WHERE username='$uname'";
        $res_u = mysqli_query($conn, $sql_u);
        if (mysqli_num_rows($res_u) == 0) {
        	$name_error = "Belum Lengkap"; 		
        } else{
			$target_dir = "uploads/";
			$target_file = $target_dir . $uname . '_bukti_pembayaran';
			$target_type = explode("/", $_FILES['bukti_pembayaran']['type'], 2);
			$target = $target_file . "." . $target_type[1];
            $query = "UPDATE siswa SET bukti_pembayaran = '$target'
                    WHERE username = '$uname'";
			$results = mysqli_query($conn, $query);

			$uploadOK = 1;
			
			if(getimagesize($_FILES["bukti_pembayaran"]["tmp_name"]) == false){
				$uploadOK = 0;
			}

			if($uploadOK == 0){
				echo('<script>alert("Upload Failed");</script>');
				echo('<script>location="bayar.php";</script>');
			} else {
				if(move_uploaded_file($_FILES["bukti_pembayaran"]["tmp_name"], $target)){
					header('location: terima.php');
				}
			}

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