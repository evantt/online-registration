<?php 
session_start();
require "config.php";
// connect to database
// $db = mysqli_connect('localhost', 'root', '', 'multi_login');

// variable declaration
$fb = "";
$telp = "";
$email = "";
$twit = "";
$lokasi = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['edit'])) {
	edit();
}

// REGISTER USER
function edit(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors,  $name_error;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$fb    =  e($_POST['fb']);
    $telp    =  e($_POST['telp']);
    $email    =  e($_POST['email']);
	$twit    =  e($_POST['twit']);
	$lokasi    =  e($_POST['lokasi']);
	// form validation: ensure that the form is correctly filled
	if (empty($fb)) { 
		array_push($errors, "Belum Lengkap"); 
	}
	if (empty($telp)) { 
		array_push($errors, "Belum Lengkap"); 
    }
    if (!isset($error_message)) {
		if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			array_push($errors, "Format Email tidak sesuai");
		} 
    }
    if (empty($twit)) { 
		array_push($errors, "Belum Lengkap"); 
	}
    if (empty($lokasi)) { 
		array_push($errors, "Belum Lengkap"); 
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		// $email = $_SESSION['email'];
        // $sql_u = "SELECT * FROM ctc ";
        // $res_u = mysqli_query($conn, $sql_u);
        // if (mysqli_num_rows($res_u) == 0) {
		// 	echo('<script>alert("Upload gagal karena satu atau beberapa hal");</script>');
		// 	unset($_POST['edit']);
		// 	return 0;
        	//$name_error = "Belum Lengkap"; 		
        // } else{
			// $target_dir = "uploads/";
			// $kk_file = $target_dir . $uname . '_kartu_keluarga';
			// $ij_file = $target_dir . $uname . '_ijazah';
			// $kk_type = explode("/", $_FILES["kartu_keluarga"]["type"], 2);
			// $ij_type = explode("/", $_FILES["ijazah"]["type"], 2);
			// $kk = $kk_file . "." . $kk_type[1];
			// $ij = $ij_file . "." . $ij_type[1];

			// print_r($_FILES["ijazah"]["type"]);
			// print_r($_FILES["kartu_keluarga"]["type"]);

			// $uploadOK = 1;
			
			// if(getimagesize($_FILES["kartu_keluarga"]["tmp_name"]) == false || getimagesize($_FILES["ijazah"]["tmp_name"]) == false){
			// 	$uploadOK = 0;
			// }

			// if($uploadOK == 0){
			// 	echo('<script>alert("Upload gagal karena satu atau beberapa hal1");</script>');
			// 	unset($_POST['regis']);
			// } else {
				// if(move_uploaded_file($_FILES["kartu_keluarga"]["tmp_name"], $kk) && move_uploaded_file($_FILES["ijazah"]["tmp_name"], $ij)){
                    $query = "UPDATE ctc SET email = '$email', fb = '$fb', twit = '$twit', lokasi = '$lokasi', telp = '$telp'";
                    // $query = "INSERT INTO ctc (email, fb, twit, lokasi, telp) values ('$email' , '$fb' , '$twit' , '$lokasi' , '$telp')";
					$results = mysqli_query($conn, $query);			
					header('location: ganti_contact.php');
                // } 
                // else {
				// 	echo('<script>alert("Upload gagal karena satu atau beberapa hal2");</script>');
				// 	unset($_POST['upload']);
				// }
						
	} else {
		echo('<script>alert("Upload gagal karena satu atau beberapa hal3");</script>');
		unset($_POST['edit']);
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