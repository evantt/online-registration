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
    
    table{
        margin-top: 3rem;
        width: 70%;
    }
    
    img {
        margin-left: 20%;
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
        <title>Ganti</title>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php require("Layout\\header2.php"); ?> 
        
        <div class="container" style="margin-top: 70px;">
            <!-- <div class="display-4" style="margin: 1rem; text-align: center">Edit Gallery Page</div> -->
            <center><h1 style="margin: 2rem;">Edit Laman Gallery</h1></center>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="regis_form" enctype="multipart/form-data">

            <?php /* echo display_error(); */ ?>

                

            <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Upload Photo &nbsp; <div style="color:red">* &nbsp;</div> 
                    <input type="file" name="photo1" id="fileToUpload1">
                    </span>
                    </div>
                    
                </div>
 
                    
                <button class="btn1" name="add">Add</button>                           
            </form>
        </div>

        <!-- <?php 
            

            $query = "SELECT photo1 FROM gallery";
            $result = mysqli_query($conn, $query);

            echo("Galeri Foto<br>");
            
            while($row = mysqli_fetch_array($result)){
                echo("<img src='" . $row['photo1'] . "' style='max-width: 200px'>");
                //echo($row['caption']);
                echo("<br>");
            }
            echo '<a href = "ganti_gallery.php">Gallery</a>';

        ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="regis_form" enctype="multipart/form-data">

            <?php /* echo display_error(); */ ?>

                <button class="btn btn-primary" name="reset">reset</button>                           
            </form> -->

        <table border=1 align="center">
        <thead>
            <tr>
            <th>Photo</th><th>Action</th>
            </tr>
        </thead>        
        <?php 
        require "config.php";
            $results = mysqli_query($conn, "SELECT * FROM gallery");
            while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
            <td><?php echo ("<a href='" . $row['photo1'] . "'>" . $row['photo1'] . "</a>"); ?></td>
            <!-- <td><?php echo $row['text']; ?></td> -->
            <td>
                <form method="post" action="db.ganti_gallery.php">
                    <input type="hidden" value="<?php echo $row['photo1']; ?>" name="photo1">
                    <!-- <input type="hidden" value="<?php echo $row['text']; ?>" name="text"> -->
                    <button class="btn1" name="delete">Delete</button>
                    <!-- <a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a> -->
                </form>            
            </td>
            </tr>
        <?php } ?>
        </table>

        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>