<?php 
    error_reporting(0);
    include('db.ganti_gallery.php');
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
        <title>Ganti</title>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php require("Layout\\header.php"); ?> 
        
        <div class="container" style="margin-top: 70px;">
            <div class="display-4" style="margin: 1rem; text-align: center">Tambah Konten Gallery</div>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="regis_form" enctype="multipart/form-data">

            <?php /* echo display_error(); */ ?>

                

            <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Foto &nbsp; 
                    <input type="file" name="foto" id="fileToUpload1">
                    </span>
                    </div>
                    
                </div>
 
                    
                <button class="btn btn-primary" name="regis">Submit</button>                           
            </form>
        </div>

        <?php 
            

            $query = "SELECT * FROM gallery";
            $result = mysqli_query($conn, $query);

            echo("Galeri Foto<br>");
            
            while($row = mysqli_fetch_array($result)){
                echo("<img src='" . 'gallery\\' . $row['photo1'] . "' style='max-width: 200px'>");
                //echo($row['caption']);
                echo("<br>");
            }
            echo '<a href = "ganti_gallery.php">home</a>';

        ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="regis_form" enctype="multipart/form-data">

            <?php /* echo display_error(); */ ?>

                

          
 
                    
                <button class="btn btn-primary" name="reset">reset</button>                           
            </form>
        

        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>