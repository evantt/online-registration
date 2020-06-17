<!DOCTYPE html>
    <head>
        <title></title>
        <style>
            /* .container{
                padding: 10px;
            } */
            h1
            {
                text-align: center;
                /* margin-left: 34%; */
                /* margin-top: 40px; */
            }
            /* .ugp{
                height: 270vh;
                padding-bottom: 480px;
            } */
            .card {
                margin-top: 50px;
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
        <h1>Gallery</h1>
        <div class="content">
            <div class="card">
                <div class="desc"></div>
                <a target="_blank" href="#">
                    <img src="https://lh3.ggpht.com/p/AF1QipNEsz8hRKiq8tRRgh-Fvyqstdvuzy8H5fGIMh8L=s512" style= "width: 100%; height: 95%;" align = "center">
                </a>
                <div class="desc"></div>
            </div>
            <div class="card">
                <div class="desc"></div>
                <a target="_blank" href="#">
                    <img src="https://geo1.ggpht.com/cbk?panoid=84Xjr21rropQ1qHC9Pw8Dw&output=thumbnail&cb_client=unknown_client.imagery_viewer.gps&thumb=2&w=203&h=100&yaw=251.03233&pitch=0&thumbfov=100" style= "width: 100%; height: 95%;" align = "center">
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
            </div>
        </div>
        <!-- </div> -->
        <?php
            require("Layout/footer.php");
        ?> 
    </body>
</html>