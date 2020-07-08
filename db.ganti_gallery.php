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
if (isset($_POST['reset'])) {
	register();
}

// REGISTER USER
function register(){
	//$sql_u = "TRUNCATE TABLE gallery";
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pemrogweb2";

    // Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        mysqli_query($conn, "TRUNCATE TABLE `gallery`");
        header ("Location: ganti_gallery.php");
        exit;
    }

   mysqli_close($conn);
	

	

	
}
//$errors   = array(); 
if (isset($_POST['regis'])) {
	//register();
	$target_dir = "gallery/";
		$target_file = $target_dir.$_FILES['foto']['name'];
				
        $target_type = explode("/", $_FILES['foto']['type'], 2);
        $target = $target_file;
        //$caption = $_POST['caption'];
        $query = "INSERT INTO gallery VALUES ('$target')";
        echo($query);
        $results = mysqli_query($conn, $query);

        $status = 1;

        if(getimagesize($_FILES["foto"]["tmp_name"]) == false)
        {
            $status = 0;
        }

        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target))
        {
            header('location: ganti_gallery.php');
        }
}
/*
		$target_dir = "gallery/";
		$target_file = $target_dir.$_FILES['foto']['name'];
				
        $target_type = explode("/", $_FILES['foto']['type'], 2);
        $target = $target_file;
        //$caption = $_POST['caption'];
        $query = "INSERT INTO gallery VALUES ('$target')";
        echo($query);
        $results = mysqli_query($conn, $query);

        $status = 1;

        if(getimagesize($_FILES["foto"]["tmp_name"]) == false)
        {
            $status = 0;
        }

        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target))
        {
            header('location: ganti_gallery.php');
        }
*/
// call the register() function if register_btn is clicked


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