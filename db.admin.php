<?php 
session_start();
require "config.php";
// connect to database

// Selecting Database
// variable declaration

/*
$name = "";
$phone_number = "";
$email = "";
$category = "";
$kartu_keluarga = "";
$ijazah = "";
*/

$errors   = array(); 

// call the register() function if register_btn is clicked

/*
if (isset($_POST['regis'])) {
	register();
}
*/

// if (isset($_POST['approve'])) {
// 	approve();
// }
// if (isset($_POST['hapus'])) {
// 	hapus();
// }
if (isset($_POST['update'])) {
	// update();
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	//$status = $_POST['status'];

	//code angkaszzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
	if($_POST['status'] == '1')
	{
		$status = true;
		mysqli_query($conn, "UPDATE siswa SET name='$name', phone_number='$phone_number', email='$email', status='$status' WHERE id=$id");
		$_SESSION['message'] = "Data updated!"; 
		unset($_POST['update']);
		header('location: admin.php');
	}
	elseif($_POST['status'] == '2')
	{
		$status = false;
		mysqli_query($conn, "UPDATE siswa SET name='$name', phone_number='$phone_number', email='$email', status='$status' WHERE id=$id");
		$_SESSION['message'] = "Data updated!"; 
		unset($_POST['update']);
		header('location: admin.php');
	}
	elseif($_POST['status'] == '3')
	{
		$status = null;
		mysqli_query($conn, "UPDATE siswa SET name='$name', phone_number='$phone_number', email='$email', status='$status' WHERE id=$id");
		$_SESSION['message'] = "Data updated!"; 
		unset($_POST['update']);
		header('location: admin.php');
	}
	elseif($_POST['status'] == '0')
	{
		mysqli_query($conn, "UPDATE siswa SET name='$name', phone_number='$phone_number', email='$email', WHERE id=$id");
		$_SESSION['message'] = "Data updated!"; 
		unset($_POST['update']);
		header('location: admin.php');
	}
	//AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA best boundaries thanks

	/*
	mysqli_query($conn, "UPDATE siswa SET name='$name', phone_number='$phone_number', email='$email', status='$status' WHERE id=$id");
	$_SESSION['message'] = "Data updated!"; 
	unset($_POST['update']);
	header('location: admin.php');
	*/
}


if(isset($_POST['delete'])){
	$id = $_REQUEST['id'];
	mysqli_query($conn, "DELETE FROM siswa WHERE id=$id");
	unset($_POST['delete']);
	$_SESSION['message'] = "Data deleted!"; 
	echo('<script>location="admin.php";</script>');
}

// function approve()
// {
// 	global $conn, $errors, $username, $name_error;

// 	$query = "UPDATE siswa SET status = true
//                     WHERE id = '$id'";
// 	$results = mysqli_query($conn, $query);
// 	$target_dir = "uploads/";
// 	$target_file = $target_dir . basename($_FILES['kartu_keluarga']["name"]);

// 	//$uploadOK = 1;
// 	move_uploaded_file($_FILES["kartu_keluarga"]["tmp_name"], $target_file);
			
// 	echo "<pre>"; 
// 	print_r($_FILES); 
// 	echo "</pre>"; 
//     header('location: admin.php');
// }

// function update(){
// 	// call these variables with the global keyword to make them available in function
// 	global $conn, $errors, $username, $name_error;

// 	// receive all input values from the form. Call the e() function
//     // defined below to escape form values
// 	$name    =  e($_POST['name']);
//     $phone_number    =  e($_POST['phone_number']);
//     $email    =  e($_POST['email']);
// 	// $category    =  e($_POST['category']);
// 	$status    =  e($_POST['status']);
// 	// form validation: ensure that the form is correctly filled
// 	if (empty($name)) { 
// 		array_push($errors, "Belum Lengkap"); 
// 	}
// 	if (empty($phone_number)) { 
// 		array_push($errors, "Belum Lengkap"); 
//     }
//     if (empty($email)) { 
// 		array_push($errors, "Belum Lengkap"); 
//     }
//     // if (empty($category)) { 
// 	// 	array_push($errors, "Belum Lengkap"); 
// 	// }
//     if (empty($status)) { 
// 		array_push($errors, "Belum Lengkap"); 
// 	}
// 	// register user if there are no errors in the form
// 	if (count($errors) == 0) {
// 		$uname = $_SESSION['username'];
//         $sql_u = "SELECT * FROM siswa WHERE username='$uname'";
//         $res_u = mysqli_query($conn, $sql_u);
//         if (mysqli_num_rows($res_u) == 0) {
//         	$name_error = "Belum Lengkap"; 		
//         } else{
// 			// $target_dir = "uploads/";
// 			// $kk_file = $target_dir . $uname . '_kartu_keluarga';
// 			// $ij_file = $target_dir . $uname . '_ijazah';
// 			// $kk_type = explode("/", $_FILES["kartu_keluarga"]["type"], 2);
// 			// $ij_type = explode("/", $_FILES["ijazah"]["type"], 2);
// 			// $kk = $kk_file . "." . $kk_type[1];
// 			// $ij = $ij_file . "." . $ij_type[1];

// 			// print_r($_FILES["ijazah"]["type"]);
// 			// print_r($_FILES["kartu_keluarga"]["type"]);

// 			// $uploadOK = 1;
			
// 			// if(getimagesize($_FILES["kartu_keluarga"]["tmp_name"]) == false || getimagesize($_FILES["ijazah"]["tmp_name"]) == false){
// 			// 	$uploadOK = 0;
// 			// }

// 			// if($uploadOK == 0){
// 			// 	echo('<script>alert("Upload Failed");</script>');
// 			// 	echo('<script>location="regis.php";</script>');
// 			// } else {
// 			// 	if(move_uploaded_file($_FILES["kartu_keluarga"]["tmp_name"], $kk) && move_uploaded_file($_FILES["ijazah"]["tmp_name"], $ij)){
// 			// 		$uploadOK = 1;
// 			// 	} else {
// 			// 		echo('<script>alert("Upload Failed");</script>');
// 			// 		echo('<script>location="regis.php";</script>');
// 			// 		$uploadOK = 0;
// 			// 	}
// 			// }
// 			$query = "UPDATE siswa SET name = '$name', phone_number = '$phone_number',  email = '$email', status = '$status'
// 			WHERE username = '$uname'";
// 			$results = mysqli_query($conn, $query);			
// 			// header('location: bayar.php');
//         }			
// 	}
// }

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

