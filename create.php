<!-- Logika untuk menambahkan data ikan ke-dalam database -->
<?php
include('connect.php');
if (isset($_POST)) {
    $nama_ikan = $_POST['nama_ikan'];
    $jenis_ikan  = $_POST['jenis_ikan'];
    $harga_ikan  = $_POST['harga_ikan'];
}

$query = mysqli_query($connect, "INSERT INTO daftar_ikan(nama_ikan, jenis_ikan, harga_ikan) VALUES  ('$nama_ikan',
'$jenis_ikan', '$harga_ikan')");
if ($query) {
    echo "<script>
            alert('Data telah ditambahkan');
            setTimeout(function(){
                window.location.href = 'form_create_ikan.php';
            }, 1000);
          </script>";
} else {
    echo "<script>alert('Data gagal ditambah')</script>";
}
$connect->close();
?>