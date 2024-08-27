<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ikan</title>
</head>

<body>
    <?php
    include("navbar.php");
    include("connect.php");
    $id = $_GET['detailid'];
    // Buatlah query untuk mengambil masing-masing data berdasarkan id dari database (gunakan fungsi GET dan mysqli_fetch_assoc() 
    // serta query SELECT dan WHERE)
    $sql = "Select * from daftar_ikan where id=$id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $nama_ikan = $row['nama_ikan'];
    $jenis_ikan  = $row['jenis_ikan'];
    $harga_ikan  = $row['harga_ikan'];

    ?>
    <div class="row">
        <center>
            <h1>Detail Ikan</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <!-- Tampilkan masing-masing data yang telah diambil dari database tadi -->
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="nama_ikan" id="nama_ikan" value="<?= $row['nama_ikan'] ?>" disabled>
                                <label for="nama_ikan">Nama Ikan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="jenis_ikan" id="jenis_ikan" value="<?= $row['jenis_ikan'] ?>" placeholder="<?= $row['jenis_ikan'] ?>" disabled>
                                <label for="jenis_ikan">Jenis Ikan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="harga_ikan" id="harga_ikan" value="<?= $row['harga_ikan'] ?>" disabled>
                                <label for="harga_ikan">Harga Ikan </label>
                            </div>
                            <a name="update" id="update" href="form_update_ikan.php?id=<?php echo $id ?>" class="btn btn-warning mb-3 mt-3 w-100">Edit</a>
                            <a name="delete" id="delete" href="delete.php?id=<?php echo $id ?>" class="btn btn-danger mb-3 mt-3 w-100">Delete</a>
                        </form>
                    </div>
                </div>
            </div>
            <center>
    </div>
</body>

</html>