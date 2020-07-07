<?php
 session_start();
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
        <title>Contact</title>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php require("Layout\\header.php"); ?> 

        <div class="container" style="margin-top: 70px;">
            <div class="display-4" style="margin: 1rem; text-align: center">Daftar Sekarang</div>

            <form method="post" action="db.bayar.php" id="regis_form" enctype="multipart/form-data">

                <div style="display: flex">
                    Transfer sebesar Rp. 500.000 ke rekening BCA: &nbsp; <div style="font-weight: bold;"> 4392 1290 3943 </div>  &nbsp; (a.n. Abc)
                </div>

                <br>

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Bukti Bayar &nbsp; <div style="color:red">*</div></span>
                    </div>
                    Select file to upload:
                    <input type="file" name="bukti_pembayaran" id="fileToUpload">
                </div>
  
                <button class="btn btn-primary" name="bayar">Submit</button>                           
            </form>
        </div>

        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>