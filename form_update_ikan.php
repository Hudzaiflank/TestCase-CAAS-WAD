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
    $id = $_GET['id'];
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
            <h1>Perbarui Detail Ikan</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="nama_ikan" id="nama_ikan" value="<?= $row['nama_ikan'] ?>">
                                <label for="nama_ikan">Nama Ikan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="jenis_ikan" id="jenis_ikan" value="<?= $row['jenis_ikan'] ?>">
                                <label for="jenis_ikan">Jenis Ikan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="harga_ikan" id="harga_ikan" value="<?= $row['harga_ikan'] ?>">
                                <label for="harga_ikan">Harga Ikan</label>
                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary mb-3 mt-3 w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <center>
    </div>
</body>

</html>