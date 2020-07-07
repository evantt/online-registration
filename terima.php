<?php 
    error_reporting(0);
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
            echo("<div style='text-align:center; padding-top: 5rem; padding-bottom: 5rem'>");
            if($_SESSION['status'] == null)
            {
                echo("Registrasi masih pending, mohon ditunggu. (っ^‿^)っ");
            } 
            elseif($_SESSION['status'] == false)
            {
                echo("Maaf, Registrasi anda ditolak. (っ^‿^)っ");
            } 
            elseif($_SESSION['status'] == true){
                echo("Selamat, Anda diterima. (っ^‿^)っ");
            }
            echo("</div>");
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
