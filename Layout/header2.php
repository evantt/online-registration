<?php
    error_reporting(0);
    session_start();
?>

<div class="navbar" id="nav">
    <header>
        <div class="left">
        <img style="padding: 10;" align="left" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQuhlM_IEV0Hn82S_poTaKGfwwdvIhRnMK3HWxiFVs6t9fciLoU&usqp=CAU" width="80px" height="80px">
        </div>
        <div class="middle">
            <nav>
                <ul class="nav__links">
                    <li><a href="admin.php">List</a></li>
                    <li><a href="ganti_home.php">Edit Home</a></li>
                    <li><a href="ganti_gallery.php">Edit Gallery</a></li>
                    <li><a href="ganti_contact.php">Edit Contact</a></li>
                    <!-- <li><a href="ganti_daftar.php">Edit Daftar Siswa</a></li> -->
                </ul>
            </nav>
        </div>
        <div class="right">
             <ul class="nav__links">
                    <form method='post' action='logout.php'>
                        <li><a href='logout.php'>Logout</a></li>
                    </form>
            </ul>
        </div>
    </header>
</div>