<?php
include 'koneksi.php'
?>

<script>
    window.print();
</script>
                                        <table border="1" width="100%" cellpadding="5" cellspacing="0">
                                            <tr>
                                                <th colspan="8">
                                                    <h2 style="margin: 0;">Data Siswa</h2>
                                                </th>
                                            </tr>
                                                <tr>
                                                    <th>NISN</th>
                                                    <th>NIS</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Kelas</th>
                                                    <th>Jurusan</th>
                                                </tr>
                                            <tbody>
                                            <?php
                                            if (isset($_GET['kelas'])) {
                                                $kelas = $_GET['kelas'];
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
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>