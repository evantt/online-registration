<?php 
session_start();
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
if (isset($_POST['regis'])) {
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
	$gender    =  e($_POST['gender']);
	$address    =  e($_POST['address']);
	$birthdate    =  e($_POST['birthdate']);
	// form validation: ensure that the form is correctly filled
	if (empty($name)) { 
		array_push($errors, "Belum Lengkap"); 
	}
	if (empty($phone_number)) { 
		array_push($errors, "Belum Lengkap"); 
    }
    if (!isset($error_message)) {
		if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			array_push($errors, "Format Email tidak sesuai");
		} 
    }
    if (empty($category)) { 
		array_push($errors, "Belum Lengkap"); 
	}
    if (empty($gender)) { 
		array_push($errors, "Belum Lengkap"); 
	}
	if (empty($address)) { 
		array_push($errors, "Belum Lengkap"); 
	}
	if (empty($birthdate)) { 
		array_push($errors, "Belum Lengkap"); 
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$uname = $_SESSION['username'];
        $sql_u = "SELECT * FROM siswa WHERE username='$uname'";
        $res_u = mysqli_query($conn, $sql_u);
        if (mysqli_num_rows($res_u) == 0) {
			echo('<script>alert("Upload gagal karena satu atau beberapa hal");</script>');
			unset($_POST['regis']);
			return 0;
        	//$name_error = "Belum Lengkap"; 		
        } else{
			$target_dir = "uploads/";
			$kk_file = $target_dir . $uname . '_kartu_keluarga';
			$ij_file = $target_dir . $uname . '_ijazah';
			$kk_type = explode("/", $_FILES["kartu_keluarga"]["type"], 2);
			$ij_type = explode("/", $_FILES["ijazah"]["type"], 2);
			$kk = $kk_file . "." . $kk_type[1];
			$ij = $ij_file . "." . $ij_type[1];

			// print_r($_FILES["ijazah"]["type"]);
			// print_r($_FILES["kartu_keluarga"]["type"]);

			$uploadOK = 1;
			
			if(getimagesize($_FILES["kartu_keluarga"]["tmp_name"]) == false || getimagesize($_FILES["ijazah"]["tmp_name"]) == false){
				$uploadOK = 0;
			}

			if($uploadOK == 0){
				echo('<script>alert("Upload gagal karena satu atau beberapa hal1");</script>');
				unset($_POST['regis']);
			} else {
				if(move_uploaded_file($_FILES["kartu_keluarga"]["tmp_name"], $kk) && move_uploaded_file($_FILES["ijazah"]["tmp_name"], $ij)){
					$query = "UPDATE siswa SET name = '$name', phone_number = '$phone_number', category = '$category', gender = '$gender', email = '$email',
					kartu_keluarga = '$kk', ijazah = '$ij', address = '$address', birthdate = '$birthdate'
					WHERE username = '$uname'";
					$results = mysqli_query($conn, $query);			
					header('location: bayar.php');
				} else {
					echo('<script>alert("Upload gagal karena satu atau beberapa hal2");</script>');
					unset($_POST['regis']);
				}
			}
        }			
	} else {
		echo('<script>alert("Upload gagal karena satu atau beberapa hal3");</script>');
		unset($_POST['regis']);
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