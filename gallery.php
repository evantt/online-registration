<?php
    session_start();
    require "config.php";
?>

<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">
    <link rel="stylesheet" href="https://fonts.google.com/sr?family=Helvetica%C2%AE+Greek&token=MT">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Gallery</title>
        <style>
            /* .container{
                padding: 10px;
            } */
            h1
            {
                text-align: center;
                /* margin-left: 34%; */
                margin-top: 80px;
                padding: 10px;
            }
            /* .ugp{
                height: 270vh;
                padding-bottom: 480px;
            } */
            .card {
                margin-top: 10px;
                background-color: white;
                margin: 15;
                padding: 10;
                float: left;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 50%;
                height: 450px;
                text-align: justify;
                font-size: x-large;
            }
            .content{
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                margin: 0;
                padding: 10;
                width: 100%;
            }
        </style>

        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php
            require("Layout/header.php");
        ?>
    <!-- <div class="container ugp" id="ugp"> -->
        <h1></h1><h1 style = "margin-top:-41px;font-size:50px;font-family:raleway;background-color:#77e0cd;">Gallery</h1>
        <div class="content" style="margin-top:-47px;background-color:#77e0cd;padding:10px;">
        <?php
            // $cnt = 1;
            $res = mysqli_query($conn, "SELECT photo1 FROM gallery;");
            while ($row = mysqli_fetch_array($res)) {
                echo('<div class="card">');
                echo('<div class="desc"></div>');
                echo("<img src='" . $row['photo1'] . "' style='width:100%; height:95%;' align = 'center'>");
                // echo("<div class='text' style = 'color: black; background-color: white;'>" . $row['text'] . "</div>");
                echo('<div class="desc"></div>');
                echo('</div>');
                // $cnt = $cnt + 1;
            }
        ?>
            <!-- <div class="card">
                <div class="desc"></div>
                <a target="_blank" href="#">
                    <img src="https://lh3.ggpht.com/p/AF1QipNEsz8hRKiq8tRRgh-Fvyqstdvuzy8H5fGIMh8L=s512" style= "width: 100%; height: 95%;" align = "center">
                </a>
                <div class="desc"></div>
            </div>
            <div class="card">
                <div class="desc"></div>
                <a target="_blank" href="#">
                    <img src="https://3.bp.blogspot.com/_GDx7sQCkliY/SaNBiUQEp0I/AAAAAAAAAQ4/TvabMd8icAQ/w1200-h630-p-k-no-nu/1991+Fisika.jpg" style= "width: 100%; height: 95%;" align = "center">
                </a>
                <div class="desc"></div>
            </div>
            <div class="card">
                <div class="desc"></div>
                <a target="_blank" href="#">
                    <img src="https://lh3.ggpht.com/p/AF1QipOqiU3SpZ-6I5P-F4asSr1bOqnhBKvVFQzMqttX=s1536" style= "width: 100%; height: 95%;" align = "center">
                </a>
                <div class="desc"></div>
            </div>
            <div class="card">
                <a target="_blank" href="#">
                    <img src="https://lh3.ggpht.com/p/AF1QipN0Df51igOWm2XhHE3xReb6tc7HeuF9hY29Xlk-=s1536" style= "width: 100%; height: 95%;" align = "center">
                </a>
                <div class="desc"></div>
            </div>
            <div class="card">
                <a target="_blank" href="#">
                    <img src="https://lh5.googleusercontent.com/p/AF1QipOyAmyMSqEBKv9guaZkhTUX3n14g5qdV0oxdP-6=s870-k-no" style= "width: 100%; height: 95%;" align = "center">
                </a>
                <div class="desc"></div>
            </div>
            <div class="card">
                <a target="_blank" href="#">
                    <img src="https://lh5.googleusercontent.com/p/AF1QipPoUoUmHkuWGoxZcPuWyS59Tt5IUxj13S7cPyzx=s480-k-no" style= "width: 100%; height: 95%;" align = "center">
                </a>
                <div class="desc"></div>
            </div> -->
        </div>
        <!-- </div> -->
        <?php
            require("Layout/footer.php");
        ?>
    </body>
</html>