<?php 

require "config.php";
// connect to database
// $db = mysqli_connect('localhost', 'root', '', 'multi_login');

// variable declaration
$name = "";
$phone_number = "";
$email = "";
$category = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $username, $name_error;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$name    =  e($_POST['name']);
    $phone_number    =  e($_POST['phone_number']);
    $email    =  e($_POST['email']);
	$category    =  e($_POST['category']);

	// form validation: ensure that the form is correctly filled
	if (empty($name)) { 
		array_push($errors, "Belum Lengkap"); 
	}
	if (empty($phone_number)) { 
		array_push($errors, "Belum Lengkap"); 
    }
    if (empty($email)) { 
		array_push($errors, "Belum Lengkap"); 
    }
    if (empty($category)) { 
		array_push($errors, "Belum Lengkap"); 
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
        $sql_u = "SELECT * FROM siswa WHERE username='$username'";
        $res_u = mysqli_query($conn, $sql_u);

        if (mysqli_num_rows($res_u) > 0) {
        $name_error = "Belum Lengkap"; 		
        }else{
            $query = "INSERT INTO siswa (name, phone_number) 
                    VALUES ('$name', '$phone_number')";
            $results = mysqli_query($conn, $query);
            header('location: login.php');
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