<?php
    error_reporting(0);
    session_start();
?>

<div class="navbar" id="nav">
    <header style="background-color:#90ff36;">
        <div class="left">
        <img style="padding: 10;" align="left" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQuhlM_IEV0Hn82S_poTaKGfwwdvIhRnMK3HWxiFVs6t9fciLoU&usqp=CAU" width="80px" height="80px">
        </div>
        <div class="middle">
            <nav>
                <ul class="nav__links">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="ctc.php">Contact</a></li>

                    <?php
                        if(isset($_SESSION['username'])){
                            if(!isset($_SESSION['name'])){
                                echo("<li><a href='regis.php'>Daftar Siswa</a></li>");
                            } else{
                                if($_SESSION['bukti_pembayaran'] == ''){
                                    echo("<li><a href='bayar.php'>Lanjut Daftar Siswa</a></li>");
                                } else{
                                    if($_SESSION['status'] == null){
                                        echo("<li><a href='terima.php'>Cek Status</a></li>");
                                    } else if($_SESSION['status'] == false){
                                        echo("<li><a href='terima.php'>Cek Status</a></li>");
                                    } if($_SESSION['status'] == true){
                                        echo("<li><a href='terima.php'>Cek Status</a></li>");
                                    }
                                }
                            }
                            // echo($_SESSION['username']);
                            // echo($_SESSION['name']);
                            // if($_SESSION['status'] == ''){
                            //     echo("status null");
                            // } else {
                            //     echo($_SESSION['status']);
                            // }
                            //echo($_SESSION['bukti_pembayaran']);
                        } else {
                            echo("<li><a href='login.php'>Daftar Siswa</a></li>");
                        }
                    ?>
                    
                    
                </ul>
            </nav>
        </div>
        <div class="right">
             <ul class="nav__links">
             <?php
                if(isset($_SESSION['username'])){
                    //echo "<script type='text/javascript'>alert('logged in');</script>";
                    echo 
                    "<form method='post' action='logout.php'>
                        <li><a href=\"logout.php\">Logout</a></li>
                    </form>";
                } else {
                    //echo "<script type='text/javascript'>alert('logging out');</script>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
             ?>
            </ul>
        </div>
    </header>
</div>