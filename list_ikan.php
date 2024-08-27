<?php include("connect.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Ikan</title>
</head>

<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Ikan</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Ikan</th>
                        <th scope="col">Jenis Ikan</th>
                        <th scope="col">Harga Ikan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM daftar_ikan ";
                    $result = mysqli_query($connect, $query);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $nama_ikan = $row['nama_ikan'];
                            $jenis_ikan  = $row['jenis_ikan'];
                            $harga_ikan  = $row['harga_ikan'];
                            echo '<tr>
        <th scope="row">' . $id . '</th>
        
        <td>' . $nama_ikan . '</td>
        <td>' . $jenis_ikan . '</td>               
       
        <td>' . $harga_ikan . '</td>
        <td><button class="btn btn-primary my-2"><a href="form_detail_ikan.php?detailid=' . $id . '" class="text-light">detail ikan</a></button></td>
        </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </center>
</body>

</html>