<?php require "config.php";
    // if (isset($_REQUEST['edit'])) {
    //     $id = $_REQUEST['id'];
    //     echo($id);
    //     $update = true;
        $result = mysqli_query($conn, "SELECT  email, lokasi, fb, twit, telp from ctc");
        
        $row = mysqli_fetch_assoc($result);
    // }
    // $id=$_REQUEST['edit'];
    // $query = "SELECT id, username, name, address, email from siswa where id='".$id."'"; 
    // $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<style>
    .form_error span {
        width: 80%;
        height: 35px;
        margin: 3px 10%;
        font-size: 1.1em;
        color: #D83D5A;
    }
    .form_error input {
        border: 1px solid #D83D5A;
    }

    .btn1{
        border: 2px solid black;
        background-color: transparent;
        width: 80px;  
    }

    .btn1:hover{
        background-color: black;
        color: white;
    }
</style>
    <head>
        <title>Edit</title>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php require("Layout\\header2.php"); ?> 

<div class="container" style="margin-top: 70px;">
    <!-- <div class="display-4" style="margin: 1rem; text-align: center">Update</div> -->
    <center><h1 style="margin: 2rem;">Edit Laman Contact</h1></center>

    
    <form method="post" action="db.ganti_contact.php" id="ctc_form" >
    <!-- <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> -->

            <?php /* echo display_error(); */ ?>


                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Email &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "email" value="<?php echo  $row['email']; ?>">
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend"  <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Telepon &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "telp" value="<?php echo $row['telp']; ?>">

                </div>  

                

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Facebook &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "fb" value="<?php echo $row['fb']; ?>">

                </div>             

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Twitter &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "twit" value="<?php echo $row['twit']; ?>">
                </div> 

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Lokasi &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "lokasi" value="<?php echo $row['lokasi']; ?>">
                </div>       

                
 
                    
                <button class="btn1" type="submit" name="edit" >Update</button>
                <!-- <?php if ($update == true): ?> -->
<!-- <?php else: ?> -->
	<!-- <button class="btn" type="submit" name="save" >Save</button> -->
<!-- <?php endif ?>                          -->
            </form>
        </div>

        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>