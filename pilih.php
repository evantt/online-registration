<?php 
    session_start();
?>

<!DOCTYPE html>
    <head>
        <title>Pilih</title>
        <style>
               /*<!-- WRYYYYYYYYYYYYYYYYY -->
               <!-- WRYYYYYYYYYYYYYYYYY -->*/
            /* Style the container with a rounded border, grey background and some padding and margin */
            /*
            .container {
            border: 4px solid #ccc;
            background-color: #eee;
            border-radius: 10px;
            padding: 16px;
            margin: 16px 0;
            width: 800px;
            }

            /* Clear floats after containers */
            .container::after {
            content: "";
            clear: both;
            display: table;
            }

            /* Float images inside the container to the left. Add a right margin, and style the image as a circle */
            .container img {
            float: left;
            margin-right: 20px;
            border-radius: 50%;
            }

            /* Increase the font-size of a span element */
            .container span {
            font-size: 20px;
            margin-right: 15px;
            }

            /* Add media queries for responsiveness. This will center both the text and the image inside the container */
            @media (max-width: 500px) {
            .container {
                text-align: center;
            }

            .container img {
                margin: auto;
                float: none;
                display: block;
            }
            }
               /*<!-- WRYYYYYYYYYYYYYYYYY -->
               <!-- WRYYYYYYYYYYYYYYYYY -->*/

                        * {box-sizing:border-box}

            /* Slideshow container */
            .slideshow-container {
            margin-top: 100px;
            margin-left: 100px;
            max-width: 1000px;
            position: relative;
            /* margin: auto; */
            }

            /* Hide the images by default */
            .mySlides {
            display: none;
            }

            /* Next & previous buttons */
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
            }

            @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
            }
            
        </style>
        <link rel="stylesheet" href="CSS/main.css">
    </head>

            
    <body>
        <?php
            require("Layout/header.php");
        ?> 
        
        <!-- copy paste dr home page-->
        
         
        
        <div class="container" style="margin-top: 70px;">
            <div class="display-4" style="margin: 1rem; text-align: center">Pilih</div>
            <ul class="list-group">
                <!--
                <li class="list-group-item"><div>Email: </div> hangkesturi69@admin.hk.edu </li>
                <li class="list-group-item">
                    <div>Telepon: </div>
                    <div>(+62)61 4538132 (Kantor/Sekolah)<div>
                    <div>(+62)853 523 5421 (Abdul)<div>
                    <div>(+62)823 531 5164 (Joko)<div>
                </li>
                <li class="list-group-item"><div>Facebook: </div>hangkesturi169 </li>
                <li class="list-group-item"><div>Twitter: </div>@hkesturi169 </li>
                <li class="list-group-item"><div>Lokasi: </div>Jl. Sutomo No. 169, Medan, Sumatera Utara </li>
                -->
                ini di bawah tombol a href
                <br>
                <br>
                <a href="ganti_home.php">untuk ganti home</a>
                <br>
                <a href="ganti_gallery.php">untuk ganti gallery</a>
                <br>
                <a href="ganti_contact.php">untuk ganti contact</a>
                <br>
                <a href="admin.php">ke page admin untuk edit siswa</a>
                    
            </ul>
        </div>
        <?php
            require("Layout/footer.php");
        ?>
    </body>
    
</html>
