<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kelas WHERE Id_kelas='$id'");

if ($query) {
    echo '<script>alert("Data Berhasil Di Hapus");location.href="?page=kelas"</script>';
}

?>