<?php 
    session_start();
    require "config.php";
?>
<!DOCTYPE html>
    <head>
        <title>Contact</title>
        <style>
            
            .list1 {
                list-style-type: none;
                padding: 0;
                margin: 0;
                width: 80%;
                margin-left: 10%;
            }

            .list1, .list2 {
                border: 1px solid #ddd;
                margin-top: -1px; /* Prevent double borders */
                background-color: #fff;
                padding: 12px;
            }
        </style>
        <!-- <link rel="stylesheet" href="CSS/bootstrap.css"> -->
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php require("Layout\\header.php"); ?> 
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="ctc_form">
        <!-- <div class="container" style="margin-top: 70px;"> -->
            <!-- <div class="display-4" style="margin: 1rem; text-align: center">Hubungi Kami</div> -->
            <center><h1 style="margin-top: 8%;">Contact</h1></center>
            <?php 
                $res = mysqli_query($conn, "SELECT email, telp, fb, twit, lokasi FROM ctc;");
                while ($row = mysqli_fetch_array($res)) {
                    echo('<ul class="list1">');
                    echo("<li class=\"list2\" <div>Email: <div class='text' style = 'color: black; background-color: white;'>" . $row['email'] . "</div> </div></li> ");
                    echo("<li class=\"list2\" <div>Telepon: <div class='text' style = 'color: black; background-color: white;'>" . $row['telp'] . "</div> </div></li> ");
                    echo("<li class=\"list2\" <div>Facebook: <div class='text' style = 'color: black; background-color: white;'>" . $row['fb'] . "</div> </div></li> ");
                    echo("<li class=\"list2\" <div>Twitter: <div class='text' style = 'color: black; background-color: white;'>" . $row['twit'] . "</div> </div></li> ");
                    echo("<li class=\"list2\" <div>Lokasi: <div class='text' style = 'color: black; background-color: white;'>" . $row['lokasi'] . "</div> </div></li> ");
                    echo('</ul>');
                }
            ?>
            <!-- <ul class="list-group">
                <li class="list-group-item" value="<?php echo  $row['email']; ?>"><div>Email: </div> hangkesturi69@admin.hk.edu </li>
                <li class="list-group-item">
                    <div>Telepon: </div>
                    <div>(+62)61 4538132 (Kantor/Sekolah)<div>
                    <div>(+62)853 523 5421 (Abdul)<div>
                    <div>(+62)823 531 5164 (Joko)<div>
                </li>
                <li class="list-group-item"><div>Facebook: </div>hangkesturi169 </li>
                <li class="list-group-item"><div>Twitter: </div>@hkesturi169 </li>
                <li class="list-group-item"><div>Lokasi: </div>Jl. Sutomo No. 169, Medan, Sumatera Utara </li>
            </ul> -->
        <!-- </div> -->
            </form>
        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>