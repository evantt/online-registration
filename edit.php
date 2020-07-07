<?php require "config.php";
    if (isset($_REQUEST['edit'])) {
        $id = $_REQUEST['id'];
        echo($id);
        $update = true;
        $result = mysqli_query($conn, "SELECT phone_number, id, username, name, address, email, birthdate, gender, status from siswa where id='$id'");
        
        $row = mysqli_fetch_assoc($result);
    }
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
</style>
    <head>
        <title>Edit</title>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php require("Layout\\header.php"); ?> 

<div class="container" style="margin-top: 70px;">
    <div class="display-4" style="margin: 1rem; text-align: center">Update</div>
    
    <form method="post" action="db.admin.php" id="regis_form" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <?php /* echo display_error(); */ ?>


                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Nama Lengkap &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "name" value="<?php echo  $row['name']; ?>">
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend"  <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">No. Telepon Rumah  (Dengan Kode Area) &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "phone_number" value="<?php echo $row['phone_number']; ?>">
                </div>  

                

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Alamat E-mail &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "email" value="<?php echo $row['email']; ?>">
                </div>             

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Alamat Rumah &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "address" value="<?php echo $row['address']; ?>">
                </div>       

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Lahir &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "birthdate" value="<?php echo $row['birthdate']; ?>">
                </div>                          

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin &nbsp; <div style="color:red">*</div></label>
                     </div>
                    <select class="custom-select" id="inputGroupSelect01" name = "gender" value="<?php echo $row['gender']; ?>">
                        <?php 
                            if($row['gender'] == 1){
                                echo("<option value='1' selected>Laki-laki</option>");
                                echo("<option value='2'>Perempuan</option>");
                            } else {
                                echo("<option value='1'>Laki-laki</option>");
                                echo("<option value='2' selected>Perempuan</option>");
                            }
                        ?>
                    </select>
                </div>        

                <!-- <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                     </div>
                    <select class="custom-select" id="inputGroupSelect01" name = "category" value="<?php echo $row['category']; ?>">
                        <option selected>Pilih...</option>
                        <option value="1">I - SD</option>
                        <option value="2">II - SD</option>
                        <option value="3">III - SD</option>
                        <option value="4">IV - SD</option>
                        <option value="5">V - SD</option>
                        <option value="6">VI - SD</option>
                    </select>
                </div> -->

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Status</label>
                     </div>
                    <select class="custom-select" id="inputGroupSelect01" name = "status">
                        <?php 
                                $array = array("Pilih..", "Terima", "Tolak", "Null"); 
                                for($i = 0; $i <= 3; $i++){
                                    echo("<option value='$i'");
                                    if($row['status'] == $i) echo(" selected");
                                    echo(">$array[$i]</option>");
                                }
                        ?>
                        <!-- <option value = "0" selected>Pilih...</option>
                        <option value="1">Terima</option>
                        <option value="2">Tolak</option>
                        <option value="3">Null</option> -->
                    </select>
                </div>

                <!-- <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Kartu Keluarga &nbsp; <div style="color:red">*</div></span>
                    </div>
                    Select file to upload:
                    <input type="file" name="kartu_keluarga" id="fileToUpload1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Nilai Rapor &nbsp; <div style="color:red">*</div></span>
                    </div>
                    Select file to upload:
                    <input type="file" name="ijazah" id="fileToUpload2">
                </div>   -->
 
                    
                <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                <!-- <?php if ($update == true): ?> -->
<!-- <?php else: ?> -->
	<!-- <button class="btn" type="submit" name="save" >Save</button> -->
<!-- <?php endif ?>                          -->
            </form>
        </div>

        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>