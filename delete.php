<!-- Buatkan logika untuk melakukan delete data dari database -->
<?php
include('connect.php');
$id = $_GET['id'];
$data = mysqli_query($connect, "SELECT * FROM daftar_ikan where id = '$id'");
mysqli_query($connect, "DELETE from daftar_ikan where id='$id'");
if ($data) {
    echo "<script>
            alert('Data telah dihapus');
            setTimeout(function(){
                window.location.href = 'index.php';
            }, 1000);
          </script>";
} else {
    echo "<script>alert('Data gagal dihapus')</script>";
}
?>