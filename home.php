<?php 
    session_start();
    require "config.php";
?>

<!DOCTYPE html>
    <head>
        <title>Home</title>
        <style>
               /*<!-- WRYYYYYYYYYYYYYYYYY -->
               <!-- WRYYYYYYYYYYYYYYYYY -->*/
            /* Style the container with a rounded border, grey background and some padding and margin */
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
            max-width: 1000px;
            position: relative;
            margin: auto;
            margin-top: 100px;
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

        <style>
            #a
                {
                    
                    background-image: url("https://www.oakridge.in/wp-content/uploads/2020/02/Sample-jpg-image-500kb.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                    
                    /*background-color: red;*/
                }
            #aa
                {
                    /*
                    background-image: url("https://www.oakridge.in/wp-content/uploads/2020/02/Sample-jpg-image-500kb.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                    */
                    background-color: rgba(255,255,255,0.69);
                    width:82%;
                    
                    
                    /*background-color: red;*/
                }
                hr.new4 {
                    border: 1px dashed black;
                }
        </style>

        <link rel="stylesheet" href="CSS/main.css">
    </head>

    <body>
        <?php
            require("Layout/header.php");
        ?> 
         <div id="a"><center><div id="aa"><br>
        <!-- NOTHINGGGGGGGGGGGG -->
                <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <?php 
            $cnt = 1;
            $res = mysqli_query($conn, "SELECT text, photo FROM home;");
            while ($row = mysqli_fetch_array($res)) {
                echo('<div class="mySlides fade">');
                echo('<div class="numbertext">' . $cnt . '/' . mysqli_num_rows($res) . '</div>');
                echo("<img src='" . $row['photo'] . "' style='width:100%; height:500px;'>");
                echo("<div class='text' style = 'color: black; background-color: white;'>" . $row['text'] . "</div>");
                echo('</div>');
                $cnt = $cnt + 1;
            }
        ?>
        
        

        <!-- <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="https://www.jurnalasia.com/wp-content/uploads/2014/08/FOTO-HL1.jpg" style="width:100%;height:600px;">
        <div class="text" style = "color: black; background-color: white;">Mahasiswa Hang Kesturi 2015</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="https://4.bp.blogspot.com/_VlqC-HRuwYY/SgYl6xRYTKI/AAAAAAAAB0Y/pHQzjsBxLg0/s400/alumni-HK-jadul.jpg" style="width:100%;height:600px;">
        <div class="text" style = "color: black; background-color: white;">SD Hang Kesturi</div>
        </div> -->

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <?php 
            for($i = 1; $i < $cnt; $i++){
                echo("<span class='dot' onclick='currentSlide(" . $i . ")'></span>");
            }
        ?>
        </div>
        <!-- NOTHINGGGGGGGGGGGG -->
        <div style = "text-align: center; font-size: 35px;">
            <br>SEKOLAH HANG KESTURI MEDAN 2020<hr width = "366px" style = "margin-bottom:20px;" class="new4">
        </div>
        <div style = "margin-left: 60px; text-align: justify; margin-right: 60px; border:3px inset #2bcf57;padding:10px;background-color:aliceblue; font-size:25px;">
        &nbsp &nbsp &nbsp &nbsp Sekolah Hang Kesturi Medan memiliki banyak sekali fasilitas. Mulai dari ruang lab komputer, perpustakaan yang lengkap
        ruang guru yang luas, kelas yang luas dan juga ac yang sangat dingin sekali dengan suhu derajat yaitu 16'C dan juga ada 3 ac
        untuk setiap kelas. Lalu, ada pun lapangan yang bisa di pakai oleh para siswa untuk belajar dan juga bermain dengan sesama. Sehingga, mereka
         bisa aktif untuk melakukan olahraga dan juga upacara untuk menghormati hari pahlawan dan lain - lain.
        </div>    
        <br>
        <center>
        <div class="container">
            <img src="https://vignette.wikia.nocookie.net/nonnontv/images/4/4d/Gu1.png/revision/latest/window-crop/width/200/x-offset/421/y-offset/0/window-width/1081/window-height/1080?cb=20180929145433" alt="Avatar" style="width:90px">
            <p style = "font-size: 23px;"><span style = "font-size: 23px;">Kevin Huang.</span> I dont know what im saying.</p>
            <p style = "font-size: 20px;">"Saya suka sama sekolah hang kesturi. Terima kasih hang kesturi sudah menjadi bagian hidup saya. Hang Kesturi Best Choice"</p>
        </div></center><br>
        </div></center></div>
        <!-- NOTHINGGGGGGGGGGGG -->
        <script>
                    var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            }
        </script>
        <!-- NOTHINGGGGGGGGGGGG -->
        <?php
            require("Layout/footer.php");
        ?>
    </body>
</html>
