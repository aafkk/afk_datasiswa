<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE Nisn='$id'");

if ($query) {
    echo '<script>alert("Data Berhasil Di Hapus");location.href="?page=siswa"</script>';
}

?>