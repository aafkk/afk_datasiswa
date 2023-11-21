<?php
if (isset($_POST['Nama_kelas'])) {
    $nama_kelas = $_POST['Nama_kelas'];
    $id_jurusan = $_POST['Id_jurusan'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas (Nama_kelas,Id_jurusan) VALUES('$nama_kelas','$id_jurusan')");

    if ($query) {
       echo '<script>alert("Data Berhasil Di Tambah");location.href="?page=kelas";</script>';
    }
}
?>

<h1 class="h3 mb-3">Tambah Kelas dan Jurusan</h1>

					<div class="row">
                        <div class="col-12">
                            <div class="card flex-fill">
                                <div class="card-body">
                                   <form action="" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Kelas</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="Nama_kelas" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Jurusan</label>
                                        <div class="col-sm-12">
                                            <select name="Id_jurusan" class="form-select">
                                             <?php
                                             $query = mysqli_query($koneksi, "SELECT * FROM  jurusan");
                                             while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                                <option value="<?php echo $data['Id_jurusan']?>"><?php echo $data['Nama_jurusan'] ?></option>
                                                <?php
                                             }
                                             ?>
                                            </select>
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