<?php 
session_start();
require "config.php";
// connect to database

// Selecting Database
// variable declaration
$name = "";
$phone_number = "";
$email = "";
$category = "";
$kartu_keluarga = "";
$ijazah = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['regis'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
    global $conn, $errors, $username, $name_error;

    //angkasa

   
    //angkasa source : https://www.w3schools.com/php/func_mysqli_fetch_array.asp


	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$name    =  e($_POST['name']);
    $phone_number    =  e($_POST['phone_number']);
    $email    =  e($_POST['email']);
	$category    =  e($_POST['category']);
	$kartu_keluarga    =  e($_POST['kartu_keluarga']);
	$ijazah = e($_POST['ijazah']);
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
	if (empty($kartu_keluarga)) { 
		array_push($errors, "Belum Lengkap"); 
    }
    if (empty($ijazah)) { 
		array_push($errors, "Belum Lengkap"); 
    }
    $sql_u = "SELECT * FROM siswa;"; //WHERE username='$uname'";
        $result = mysqli_query($conn, $sql_u);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo $row['user_uid'] . "<br>";
            }
        }
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		//$uname = $_SESSION['username'];
        
        
        
    
        

        
        if (mysqli_num_rows($res_u) == 0) {
        	$name_error = "Belum Lengkap"; 		
        } else{
            /*
            $query = "UPDATE siswa SET name = '$name', phone_number = '$phone_number', email = '$email',
					kartu_keluarga = '$kartu_keluarga', ijazah = '$ijazah'
                    WHERE username = '$uname'";
			$results = mysqli_query($conn, $query);
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES['kartu_keluarga']["name"]);

			//$uploadOK = 1;
			move_uploaded_file($_FILES["kartu_keluarga"]["tmp_name"], $target_file);
			
			echo "<pre>"; 
			print_r($_FILES); 
			echo "</pre>"; 
            //header('location: bayar.php');
            */
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