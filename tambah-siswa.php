<?php
if (isset($_POST['Nisn'])) {
    $nisn = $_POST['Nisn'];
    $nis = $_POST['Nis'];
    $nama_siswa = $_POST['Nama_siswa'];
    $tempat_lahir = $_POST['Tempat_lahir'];
    $tanggal_lahir = $_POST['Tanggal_lahir'];
    $jenis_kelamin = $_POST['Jenis_kelamin'];
    $id_kelas = $_POST['Id_kelas'];

    $query = mysqli_query($koneksi, "INSERT INTO siswa (Nisn,Nis,Nama_siswa,Tempat_lahir,Tanggal_lahir,Jenis_kelamin,Id_kelas) VALUES('$nisn','$nis','$nama_siswa','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$id_kelas')");

    if ($query) {
        echo '<script>alert("Data berhasil di Tambah");location.href="?page=siswa";</script>';
    }
}

?>


<h1 class="h3 mb-3">Tambah Siswa</h1>

<div class="row">
    <div class="col-12">
        <div class="card flex-fill">
            <div class="card-body">
                <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">NISN</label>
                    <div class="col-sm-12">
                        <input type="text" name="Nisn" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <div class="col-sm-12">
                            <input type="text" name="Nis" class="form-control" required>
                        </div>
                            <div class="mb-3">
                    <label class="form-label">Nama Siswa</label>
                    <div class="col-sm-12">
                        <input type="text" name="Nama_siswa" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <div class="col-sm-12">
                            <input type="text" name="Tempat_lahir" class="form-control" required>
                        </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <div class="col-sm-12">
                            <input type="date" name="Tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="Jenis_kelamin" class="form-select">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas dan Jurusan</label>
                        <div class="col-sm-12">
                            <select name="Id_kelas"class="form-select">
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM kelas INNER JOIN jurusan ON kelas.Id_jurusan=jurusan.Id_jurusan");
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $data['Id_kelas'] ?>"><?php echo $data ['Nama_kelas'] ?> - <?php echo $data['Nama_jurusan'] ?></option>

                                <?php
                            }
                            ?>
                            </select>
                        </div>
                        </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary rounded"><i data-feather="save"></i></button>
                    <button type="reset" class="btn btn-success rounded"><i data-feather="refresh-ccw"></i></button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
				