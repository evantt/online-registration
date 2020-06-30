<?php include('db.admin.php') ?>
<!DOCTYPE html>
    <head>
        <title></title>
        <style>
            table{
                margin-top: 20px;
                margin-left: 2%;
                width: 96%;
            }
            .edit_btn {
                text-decoration: none;
                padding: 2px 5px;
                background: #2E8B57;
                color: white;
                border-radius: 3px;
            }

            .del_btn {
                text-decoration: none;
                padding: 2px 5px;
                color: white;
                border-radius: 3px;
                background: #800000;
            }
            .msg {
                margin: 30px auto; 
                padding: 10px; 
                border-radius: 5px; 
                color: #3c763d; 
                background: #dff0d8; 
                border: 1px solid #3c763d;
                width: 50%;
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php
            require("Layout/header.php");
            $results = mysqli_query($conn, "SELECT * FROM siswa");
            echo '<br>';
        ?>
        
        <?php if (isset($_SESSION['message'])): ?>
            <div class="msg">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
        <table border="1">
            <thead>
                <tr>
                <th>Id.</th><th>Name</th><th>Birthdate</th><th>Email</th><th>Phone</th><th>Address</th><th>Category</th><th>Kartu Keluarga</th><th>Bukti Pembayaran</th><th>Nilai Rapor</th><th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['birthdate']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo ("<a href='" . $row['kartu_keluarga'] . "'>" . $row['kartu_keluarga'] . "</a>"); ?></td>
                    <td><?php echo ("<a href='" . $row['bukti_pembayaran'] . "'>" . $row['bukti_pembayaran'] . "</a>"); ?></td>
                    <td><?php echo ("<a href='" . $row['ijazah'] . "'>" . $row['ijazah'] . "</a>"); ?></td>
                    <!--<td><?php //echo $row['status']; ?></td>-->

                    <!-- PROGRAM ANGKASAAAAAAAAAAAAA -->
                    <td>
                        <?php 
                            if($row['status'] == '1')
                            {
                                echo 'Di Terima';
                            }
                            elseif($row['status'] == false)
                            {
                                echo 'Di Tolak';
                            }
                            elseif($row['status'] == '')
                            {
                                echo 'NULL';
                            } 
                        ?>
                    </td>

                    <!-- U THINK ITS ANOTHER ANGKASA? BUT ITS ME DIO DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

                    <td>
                    <form method="post" action="edit.php">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <button class="edit_btn" name="edit">Update</button>
                        <!-- <a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a> -->
                    </form>
                        
                    </td>
                    <td>
                    <form method="post" action="db.admin.php">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <button class="del_btn" name="delete">Delete</button>
                        <!-- <a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a> -->
                    </form>                    
                        <!-- <a href="db.admin.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a> -->
                    </td>
                </tr>
            <?php } ?>
        </table>
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
            // $sql_u = "SELECT * FROM siswa;"; //WHERE username='$uname'";
            // $result = mysqli_query($conn, $sql_u);
            // $resultCheck = mysqli_num_rows($result);
            // if($resultCheck > 0)
            // {
            //     while ($row = mysqli_fetch_assoc($result))
            //     {
            //         //echo implode(" ", $row) . "<br>";
            //         echo $row['username']
            //         .
            //         '<input type = "checkbox" id = $row["id"] name = $row["id"] value = $row["id"]>'
            //         .
            //         '<br>'
            //         ;
            //     }
            // }
        ?>
       
        <!-- <input type="submit" value="Tekan untuk Approve Murid" name = "approve">
        <input type="submit" value="Hapus Murid" name = "hapus"> -->
        </form>

        <?php
            require("Layout/footer.php");
        ?> 
    </body>
</html>