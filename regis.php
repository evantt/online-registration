<?php 
    error_reporting(0);
    include('db.regis.php');
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
        <title>Daftar Siswa</title>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php require("Layout\\header.php"); ?> 

        <div class="container" style="margin-top: 70px;">
            <div class="display-4" style="margin: 1rem; text-align: center">Daftar Sekarang</div>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="regis_form" enctype="multipart/form-data">

            <?php /* echo display_error(); */ ?>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Nama Lengkap &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "name" value="<?php echo $_POST['name']; ?>">
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend"  <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">No. Telepon Rumah  &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "phone_number" value="<?php echo $_POST['phone_number']; ?>">

                </div>  

                

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Alamat E-mail &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "email" value="<?php echo $_POST['email']; ?>">
                </div>   

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Alamat Rumah (Dengan Kode Area) &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "address" value="<?php echo $_POST['address']; ?>">
                </div>       

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Lahir &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name = "birthdate" value="<?php echo $_POST['birthdate']; ?>">
                </div>                                                 

                        

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin &nbsp; <div style="color:red">*</div></label>
                     </div>
                    <select class="custom-select" id="inputGroupSelect01" name = "gender" value="<?php echo $_POST['gender']; ?>">
                    <?php 
                            if($_POST['gender'] == 1){
                                echo("<option value='1' selected>Laki-laki</option>");
                                echo("<option value='2'>Perempuan</option>");
                            } else {
                                echo("<option value='1'>Laki-laki</option>");
                                echo("<option value='2' selected>Perempuan</option>");
                            }
                        ?>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas &nbsp; <div style="color:red">*</div></label>
                     </div>
                    <select class="custom-select" id="inputGroupSelect01" name = "category" value="<?php echo $_POST['category']; ?>">
                    <?php 
                        $array2 = array("Pilih..", "I - SD", "II - SD", "III - SD", "IV - SD", "V - SD", "VI - SD"); 
                        for($i = 0; $i <= 6; $i++){
                            echo("<option value='$i'");
                            if($_POST['category'] == $i) echo(" selected");
                            echo(">$array2[$i]</option>");
                        }
                    ?>
                        <!-- <option selected>Pilih...</option>
                        <option value="1">I - SD</option>
                        <option value="2">II - SD</option>
                        <option value="3">III - SD</option>
                        <option value="4">IV - SD</option>
                        <option value="5">V - SD</option>
                        <option value="6">VI - SD</option> -->
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Kartu Keluarga &nbsp; <div style="color:red">*</div></span>
                    </div>
                    Select file to upload:
                    <input type="file" name="kartu_keluarga" id="fileToUpload1" value="<?php echo $_POST['kartu_keluarga']; ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Nilai Rapor &nbsp; <div style="color:red">*</div></span>
                    </div>
                    Select file to upload:
                    <input type="file" name="ijazah" id="fileToUpload2" value="<?php echo $_POST['ijazah']; ?>">
                </div>  
 
                    
                <button class="btn1" name="regis">Submit</button>                           
            </form>
        </div>

        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>