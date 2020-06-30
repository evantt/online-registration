<?php 
    session_start();
?>

<!DOCTYPE html>
    <head>
        <title>Home</title>
        <style>
             
        </style>
        <link rel="stylesheet" href="CSS/main.css">
    </head>

    <body>
        <?php
            require("Layout/header.php");
        ?> 
        
        <!-- ANGKASZZZZZZZZZZ -->
        <?php
            if($_SESSION['status'] == null)
            {
                echo("Masih Tunggu");
            } 
            elseif($_SESSION['status'] == false)
            {
                echo("Reject");
            } 
            elseif($_SESSION['status'] == true){
                echo("Terima");
            }
        ?>
        <!-- capek pls help -->


        <!-- bukan punya angkasa gk tw kek mn muncul wtf -->
        <?php //if ($_SESSION['status']): ?>
            <!-- echo("terima"); -->
        <?php //endif ?>
        <!-- WEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->
        <!-- NOTHINGGGGGGGGGGGG -->
        <?php
            require("Layout/footer.php");
        ?>
    </body>
</html>
