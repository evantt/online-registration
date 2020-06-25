<?php include('db.admin.php') ?>
<!DOCTYPE html>
    <head>
        <title></title>
        <style>
            table{
                margin-top: 100px;
                margin-left: 2%;
                width: 96%;
            }
        </style>
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php
            // require("config.php");

            require("Layout/header.php");
            
            // $query= "select * from student";

            // $hasil = mysqli_query($conn, $query);

             echo "<table border=1><tr>
             <th>Id.</th><th>Name</th><th>Birthdate</th><th>Email</th><th>Phone</th><th>Address</th><th>Category</th><th>Kartu Keluarga</th><th>Bukti Pembayaran</th><th>Action</th><tr/>";
            //  while($row = mysqli_fetch_array($hasil)){
                 echo "<tr>";
                //  echo "<td>". $row['id']."</td>";
                //  echo "<td>". $row['nama']."</td>";
                //  echo "<td>". $row['no_hp']."</td>";
                 echo "</tr>";
            //  };
         echo "</table>";
        ?>
        <!-- <div>
        <table style="margin-top: 100px; width: 96%; margin-left: 2%;">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Category</th>
                <th scope="col">Kartu Keluarga</th>
                <th scope="col">Bukti Pembayaran</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1</td>
                <td>Mark</td>
                <td>01-01-1999</td>
                <td>mark@seed.com</td>
                <td>12345678</td>
                <td>Jl.abc no123</td>
                <td>SMA</td>
                <td>KK</td>
                <td>BP</td>
                <td>
                    <a href="" >Edit</a>
                    <a href="" >Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        </div> -->

        
        <?php
        /*
            //kodingzzzzzzzz dari angkasazzzzzzz source nya confusing
            $sql_u = "SELECT * FROM siswa;"; //WHERE username='$uname'";
            $result = mysqli_query($conn, $sql_u);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    //echo implode(" ", $row) . "<br>";
                    echo $row['username']."<br>";
                }
            }
        */
        ?>

        <form action="db.admin.php">
        <?php
            //kodingzzzzzzzz dari angkasazzzzzzz source nya confusing
            $sql_u = "SELECT * FROM siswa;"; //WHERE username='$uname'";
            $result = mysqli_query($conn, $sql_u);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    //echo implode(" ", $row) . "<br>";
                    echo $row['username']
                    .
                    '<input type = "checkbox" id = $row["id"] name = $row["id"] value = $row["id"]>'
                    .
                    '<br>'
                    ;
                }
            }
        ?>
        <input type="submit" value="Tekan untuk Approve Murid" name = "approve">
        <input type="submit" value="Hapus Murid" name = "hapus">
        </form>

        <?php
            require("Layout/footer.php");
        ?> 
    </body>
</html>