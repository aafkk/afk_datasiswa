<?php
if (isset($_POST['kelas'])) {
    $kelas = $_POST['kelas'];
}
?>

<h1 class="h3 mb-3">Siswa</h1>

					<div class="row">
                        <div class="col-12">
                            <div class="card flex-fill"> 
                                <div class="card-body">
                                <a href="?page=tambah-siswa" class="btn btn-success btn-sm mb-3">+ Tambah Siswa</a>
                                <?php 
                                if (!empty($_POST['kelas'])) {
                                    ?>
                                 <a href="cetak-siswa.php?kelas=<?php echo $kelas ?>" class="btn btn-primary btn-sm mb-3" target="_blank"><i data-feather="printer"> printer</i></a>    
                                    <?php
                                } else {
                                ?>
                                 <a href="cetak-siswa.php" class="btn btn-primary btn-sm mb-3" target="_blank"><i data-feather="printer"></i> printer</a>
                                <?php
                                }
                                ?>
                                
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <select name="kelas" class="form-select">
                                                       
                                                            <option value="X" <?php echo isset($_POST['kelas']) == true ? ($_POST['kelas'] == 'X' ? 'selected' : '') : "" ?>>
                                                                   X
                                                            </option>
                                                            <option value="XI" <?php echo isset($_POST['kelas']) == true ? ($_POST['kelas'] == 'XI' ? 'selected' : '') : "" ?>>
                                                                   XI
                                                            </option>
                                                            <option value="XII" <?php echo isset($_POST['kelas']) == true ? ($_POST['kelas'] == 'XII' ? 'selected' : '') : "" ?>>
                                                                   XII
                                                            </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-light"><i data-feather="search"></i></button>
                                                <a href="?page=siswa" class="btn btn-light"><i data-feather="refresh-ccw"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                    <table class="table table-bordered table-striped hover cell-border" id="siswa">
                                        <thead>
                                            <tr>
                                                <th>NISN</th>
                                                <th>NIS</th>
                                                <th>Nama Siswa</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           if (isset($_POST['kelas'])) {
                                              $kelas = $_POST['kelas'];
                                              $query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.Id_kelas=kelas.Id_kelas INNER JOIN jurusan ON kelas.Id_jurusan=jurusan.Id_jurusan WHERE Nama_kelas='$kelas'");
                                           }else {
                                              $query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.Id_kelas=kelas.Id_kelas INNER JOIN jurusan ON kelas.Id_jurusan=jurusan.Id_jurusan ");
                                           }
                                           while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                             <tr>
                                                <td><?php echo $data['Nisn']?></td>
                                                <td><?php echo $data['Nis']?></td>
                                                <td><?php echo $data['Nama_siswa']?></td>
                                                <td><?php echo $data['Tempat_lahir']?></td>
                                                <td><?php echo $data['Tanggal_lahir']?></td>
                                                <td><?php echo $data['Jenis_kelamin']?></td>
                                                <td><?php echo $data['Nama_kelas']?></td>
                                                <td><?php echo $data['Nama_jurusan']?></td>
                                                <td>
                                                    <a href="?page=edit-siswa&id=<?php echo $data['Nisn'] ?>"class="btn btn-primary btn-sm rounded"><i data-feather="edit"></i></a>
                                                    <a href="?page=hapus-siswa&id=<?php echo $data['Nisn'] ?>"class="btn btn-danger btn-sm rounded"><i data-feather="trash-2"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                           }
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        let table = new DataTable('#siswa');
                    </script>
				