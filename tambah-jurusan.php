<?php
if (isset($_POST['nama_jurusan'])) {
    $nama_jurusan = $_POST['nama_jurusan'];

    $query = mysqli_query($koneksi, "INSERT INTO jurusan (Nama_jurusan) VALUES('$nama_jurusan')");

    if ($query) {
       echo '<script>alert("Data Berhasil Di Tambah");location.href="?page=jurusan";</script>';
    }
}
?>

<h1 class="h3 mb-3">Tambah Jurusan</h1>

					<div class="row">
                        <div class="col-12">
                            <div class="card flex-fill">
                                <div class="card-body">
                                   <form action="" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Jurusan</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="nama_jurusan" class="form-control" required>
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