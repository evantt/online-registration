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
        
        <?php if ($_SESSION['status']): ?>
            echo("terima");
        <?php endif ?>
        
        <!-- NOTHINGGGGGGGGGGGG -->
        <?php
            require("Layout/footer.php");
        ?>
    </body>
</html>
