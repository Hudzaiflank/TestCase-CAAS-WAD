<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ikan</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>Tambah Ikan</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="create.php" method="POST" enctype="multipart/form-data" name="form_create">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="nama_ikan" id="nama_ikan">
                                <label for="nama_ikan">Nama Ikan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="jenis_ikan" id="jenis_ikan">
                                <label for="jenis_ikan">Jenis Ikan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="harga_ikan" id="harga_ikan">
                                <label for="harga_ikan">Harga Ikan</label>
                            </div>
                            <button type="submit" id="create" class="btn btn-primary mb-3 mt-3 w-100">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <center>
</body>
</html>
