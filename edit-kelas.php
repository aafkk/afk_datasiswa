<?php
$id = $_GET['id'];
if (isset($_POST['Nama_kelas'])) {
    $nama_kelas = $_POST['Nama_kelas'];
    $id_jurusan = $_POST['Id_jurusan'];

    $query = mysqli_query($koneksi, "UPDATE kelas SET Nama_kelas='$nama_kelas',Id_jurusan='$id_jurusan' WHERE Id_kelas='$id'");

    if ($query) {
       echo '<script>alert("Data Berhasil Di Ubah");location.href="?page=kelas";</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT * FROM kelas WHERE Id_kelas='$id'");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Edit Kelas dan Jurusan</h1>

					<div class="row">
                        <div class="col-12">
                            <div class="card flex-fill">
                                <div class="card-body">
                                   <form action="" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Kelas</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="Nama_kelas" class="form-control"value="<?php echo $data['Nama_kelas'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Jurusan</label>
                                        <div class="col-sm-12">
                                            <select name="Id_jurusan" class="form-select">
                                             <?php
                                             $query = mysqli_query($koneksi, "SELECT * FROM  jurusan");
                                             while ($jurusan = mysqli_fetch_array($query)) {
                                                ?>
                                                <option value="<?php echo $jurusan['Id_jurusan']?>" <?php if($data['Id_jurusan'] == $jurusan['Id_jurusan']) {echo 'selected';} ?>><?php echo $jurusan['Nama_jurusan'] ?></option>
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