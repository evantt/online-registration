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
        
            <form method="post" action="db.ganti_home.php" id="regis_form" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Upload Gambar &nbsp; <div style="color:red">*</div></span>
                    </div>
                    Select file to upload:
                    <input type="file" name="photo" id="fileToUpload1">
                </div>  

                <div class="input-group mb-3">
                    <div class="input-group-prepend" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
                        <span class="input-group-text" id="inputGroup-sizing-default">Deskripsi &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" name="text" id="fileToUpload2">
                </div>          
            
                <button class="btn" type="submit" name="add" style="background: #556B2F;" >Add</button>
            </form>

        </div>

        <table border=1 align="center">
        <thead>
            <tr>
            <th>Photo</th><th>Text</th><th>Action</th>
            </tr>
        </thead>        
        <?php 
        require "config.php";
            $results = mysqli_query($conn, "SELECT * FROM home");
            while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
            <td><?php echo $row['photo']; ?></td>
            <td><?php echo $row['text']; ?></td>
            <td>
                <form method="post" action="db.ganti_home.php">
                    <input type="hidden" value="<?php echo $row['photo']; ?>" name="photo">
                    <input type="hidden" value="<?php echo $row['text']; ?>" name="text">
                    <button class="edit_btn" name="delete">Delete</button>
                    <!-- <a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a> -->
                </form>            
            </td>
            </tr>
        <?php } ?>
        </table>
        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>