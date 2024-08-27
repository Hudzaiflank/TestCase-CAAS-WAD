<!-- File untuk melakukan handle untuk logika update -->
<?php
include("connect.php");
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
$id = $_GET['id'];
$data = mysqli_query($connect, "SELECT * FROM daftar_ikan where id = '$id'");
// (2) Tangkap nilai "id" ikan (CLUE: gunakan GET)
// (3) Buatkan fungsi "update" yang menerima data sebagai parameter
$nama_ikan = $_POST['nama_ikan'];
$jenis_ikan  = $_POST['jenis_ikan'];
$harga_ikan  = $_POST['harga_ikan'];
// Panggil fungsi update dengan data yang sesuai
mysqli_query($connect, "UPDATE daftar_ikan set nama_ikan='$nama_ikan', jenis_ikan='$jenis_ikan', harga_ikan='$harga_ikan' where id='$id'");
// Tutup koneksi ke database setelah selesai menggunakan database
if ($data) {
    echo "<script>
            alert('Data telah diubah');
            setTimeout(function(){
                window.location.href = 'index.php';
            }, 1000);
          </script>";
} else {
    echo "<script>alert('Data gagal diubah')</script>";
}
$connect->close();
?>