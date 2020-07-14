<?php 
session_start();
require "config.php";

$errors = array();

if (isset($_POST['add'])) {
	$photo = 'photos/' . $_FILES['photo1']['name'];
	// $text = $_POST['text'];

	mysqli_query($conn, "INSERT INTO gallery (photo1) VALUES ('$photo');");
	$_SESSION['message'] = "Data updated!";
	unset($_POST['update']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], $photo);
	header('location: ganti_gallery.php');
}

if(isset($_POST['delete'])){
	$photo = $_POST['photo1'];
	// $text = $_POST['text'];
	mysqli_query($conn, "DELETE FROM gallery WHERE photo1='$photo';");
	unset($_POST['delete']);
	$_SESSION['message'] = "Data deleted!"; 
	echo('<script>location="ganti_gallery.php";</script>');
}

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