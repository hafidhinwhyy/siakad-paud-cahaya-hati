<?php include ('../config/autoload.php'); ?>
<?php include ('data-siswa-control.php');?>
<?php include('../template/header.php'); ?> 
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
        <div class="col-md-12">
            <!-- <?php if(isset($_SESSION['pesan_sukses'])) { ?>
                <div class="alert alert-success">
                    <?= $_SESSION['pesan_sukses']; ?>
                </div>
            <?php } 
                // unset($_SESSION['pesan_sukses']);
            ?> -->
        </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#mymodal">Tambah Data</button>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIPD</th>
                                        <th>Rombel</th>
                                        <th>Username</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <?php 
                                    include '../config/koneksi.php';
                                    $no = 1;
                                        $where = " WHERE 1=1 ";
                                            if(isset($_GET['key'])){
                                        $where .= " AND nama LIKE '%".addslashes($_GET['key'])."%' ";
                                        }

                                    $siswa = mysqli_query($conn, "SELECT * FROM siswa order by nama_siswa asc");
                                    
                                    if(mysqli_num_rows($siswa) > 0){
                                        while($k = mysqli_fetch_array($siswa)){
                                        
                                        $nipd = $k['nipd'];
                                        $nama_siswa = $k['nama_siswa'];
                                        $username = $k['username'];
                                        $jk = $k['jk'];
                                        $nisn = $k['nisn'];
                                        $tpt_lahir = $k['tpt_lahir'];
                                        $tgl_lahir = $k['tgl_lahir'];
                                        $nik_siswa = $k['nik_siswa'];
                                        $agama = $k['agama'];
                                        $alamat = $k['alamat'];
                                        $jns_tinggal = $k['jns_tinggal'];
                                        $transportasi = $k['transportasi'];
                                        $rombel = $k['rombel'];
                                        $no_telp = $k['no_telp'];
                                        $email = $k['email'];
                                        $skhun = $k['skhun'];
                                        $penerima_kps = $k['penerima_kps'];
                                        $no_kps = $k['no_kps'];
                                        $nama_ayah = $k['nama_ayah'];
                                        $thn_lahir_ayah = $k['thn_lahir_ayah'];
                                        $pendidikan_ayah = $k['pendidikan_ayah'];
                                        $pekerjaan_ayah = $k['pekerjaan_ayah'];
                                        $penghasilan_ayah = $k['penghasilan_ayah'];
                                        $nik_ayah = $k['nik_ayah'];
                                        $nama_ibu = $k['nama_ibu'];
                                        $thn_lahir_ibu = $k['thn_lahir_ibu'];
                                        $pendidikan_ibu = $k['pendidikan_ibu'];
                                        $pekerjaan_ibu = $k['pekerjaan_ibu'];
                                        $penghasilan_ibu = $k['penghasilan_ibu'];
                                        $nik_ibu = $k['nik_ibu'];
                                        $foto = $k['foto'];
                                        $idsiswa = $k['id'];
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $no++?></td>
                                            <td><?= $nama_siswa?></td>
                                            <td><?= $nipd?></td>
                                            <td><?= $rombel?></td>
                                            <td><?= $username?></td>
                                            
                                            <td><img src="../uploads/siswa/<?= $foto ?>" width= "50px"> </td>
                                            <td>
                                                <a href="detail-siswa.php?id=<?= $k['id']?>" class="btn btn-info">Detail</a>
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#edit<?=$idsiswa?>">Edit</button>

                                                <button type="button" class="btn btn-danger" data-toggle="modal" 
                                                    data-target="#delete<?=$idsiswa?>">Hapus</button>
                                            </td>
                                        </tr>
                            
                        <!-- The Modal edit -->
                        <div class="modal fade" id="edit<?=$idsiswa?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Ubah Data <?=$nama_siswa?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <label class="control-label" for="nipd">NIPD</label>
                                                <input type="text" name="nipd" class="form-control" placeholder="NIPD" value="<?=$nipd?>">

                                                <label class="control-label" for="nama_siswa">Nama Siswa</label>
                                                <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" value="<?=$nama_siswa?>">

                                                <label class="control-label mt-3" for="username">Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Username" value="<?=$username?>">

                                                <label class="control-label mt-3" for="jk">Jenis Kelamin</label>
                                                <select class="form-control" id="jk" name="jk" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="Laki-laki">L</option>
                                                    <option value="Perempuan">P</option>
                                                </select>

                                                <label class="control-label mt-3" for="nisn">NISN</label>
                                                <input type="text" name="nisn" class="form-control" placeholder="NISN" value="<?=$nisn?>">

                                                <label class="control-label mt-3" for="tpt_lahir">Tempat Lahir</label>
                                                <input type="text" name="tpt_lahir" class="form-control" placeholder="Tempat Lahir" value="<?=$tpt_lahir?>">

                                                <label class="control-label mt-3" for="tgl_lahir">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?=$tgl_lahir?>">

                                                <label class="control-label mt-3" for="nik_siswa">NIK</label>
                                                <input type="text" name="nik_siswa" class="form-control" placeholder="NIK" value="<?=$nik_siswa?>">

                                                <label class="control-label mt-3" for="agama">Agama</label>
                                                <select class="form-control" id="agama" name="agama" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="ISLAM">ISLAM</option>
                                                    <option value="KATOLIK">KATOLIK</option>
                                                    <option value="PROTESTAN">PROTESTAN</option>
                                                    <option value="HINDU">HINDU</option>
                                                    <option value="BUDHA">BUDHA</option>
                                                    <option value="KONGHUCU">KONGHUCU</option>
                                                </select>

                                                <label class="control-label mt-3" for="alamat">Alamat Lengkap</label>
                                                <textarea name="alamat" id="alamat" class="form-control"><?=$alamat?></textarea>

                                                <label class="control-label mt-3" for="jns_tinggal">Jenis Tinggal</label>
                                                <input type="text" name="jns_tinggal" class="form-control" placeholder="Jenis Tinggal" value="<?=$jns_tinggal?>">

                                                <label class="control-label mt-3" for="transportasi">Transportasi</label>
                                                <input type="text" name="transportasi" class="form-control" placeholder="Transportasi" value="<?=$transportasi?>">

                                                <label class="control-label mt-3" for="rombel">Rombongan Belajar</label>
                                                <select class="form-control" id="rombel" name="rombel" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="A">A</option>
                                                    <option value="B1">B1</option>
                                                    <option value="B2">B2</option>
                                                </select>

                                                <label class="control-label mt-3" for="no_telp">Nomor Telepon</label>
                                                <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon" value="<?=$no_telp?>">

                                                <label class="control-label mt-3" for="email">Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="Email" value="<?=$email?>">

                                                <label class="control-label mt-3" for="skhun">SKHUN</label>
                                                <input type="text" name="skhun" class="form-control" placeholder="SKHUN" value="<?=$skhun?>">

                                                <label class="control-label mt-3" for="penerima_kps">Penerima KPS</label>
                                                <select class="form-control" id="penerima_kps" name="penerima_kps" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>

                                                <label class="control-label mt-3" for="no_kps">No KPS</label>
                                                <input type="text" name="no_kps" class="form-control" placeholder="No KPS" value="<?=$no_kps?>">

                                                <label class="control-label mt-3" for="foto">Foto</label> <br>
                                                <img src="../uploads/siswa/<?= $foto?>" width="200px" class="image">
                                                    <input type="hidden" name="gambar2" value="<?= $foto?>">
                                                    <input type="file" name="gambar" class="input-control">

                                                    <input type="hidden" name="idsiswa" value="<?=$idsiswa;?>"><br>

                                                <!-- DATA AYAH -->
                                                <label class="control-label mt-3" for="nama_ayah">Nama Ayah</label>
                                                <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" value="<?=$nama_ayah?>">

                                                <label class="control-label mt-3" for="thn_lahir_ayah">Tahun Lahir</label>
                                                <input type="text" name="thn_lahir_ayah" class="form-control" placeholder="Tahun Lahir Ayah" value="<?=$thn_lahir_ayah?>">

                                                <label class="control-label mt-3" for="pendidikan_ayah">Pendidikan</label>
                                                <select class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>

                                                <label class="control-label mt-3" for="pekerjaan_ayah">Pekerjaan</label>
                                                <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" value="<?=$pekerjaan_ayah?>">

                                                <label class="control-label mt-3" for="penghasilan_ayah">Penghasilan</label>
                                                <select class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="< Rp. 500.000">< Rp. 500.000</option>
                                                    <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                    <option value="Rp. 2.000.000 - Rp. 2.999.999">Rp. 2.000.000 - Rp. 2.999.999</option>
                                                    <option value="Rp. 3.000.000 - Rp. 3.999.999">Rp. 3.000.000 - Rp. 3.999.999</option>
                                                    <option value="Rp. 4.000.000 - Rp. 4.999.999">Rp. 4.000.000 - Rp. 4.999.999</option>
                                                    <option value="Rp. 5.000.000 - Rp. 5.999.999">Rp. 5.000.000 - Rp. 5.999.999</option>
                                                    <option value="> Rp. 6.000.000">> Rp. 6.000.000</option>
                                                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                </select>

                                                <label class="control-label mt-3" for="nik_ayah">NIK</label>
                                                <input type="text" name="nik_ayah" class="form-control" placeholder="NIK Ayah" value="<?=$nik_ayah?>">

                                                <!-- DATA IBU -->
                                                <label class="control-label mt-3" for="nama_ibu">Nama Ibu</label>
                                                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" value="<?=$nama_ibu?>">

                                                <label class="control-label mt-3" for="thn_lahir_ibu">Tahun Lahir</label>
                                                <input type="text" name="thn_lahir_ibu" class="form-control" placeholder="Tahun Lahir Ibu" value="<?=$thn_lahir_ibu?>">

                                                <label class="control-label mt-3" for="pendidikan_ibu">Pendidikan</label>
                                                <select class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>

                                                <label class="control-label mt-3" for="pekerjaan_ibu">Pekerjaan</label>
                                                <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" value="<?=$pekerjaan_ibu?>">

                                                <label class="control-label mt-3" for="penghasilan_ibu">Penghasilan</label>
                                                <select class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="< Rp. 500.000">< Rp. 500.000</option>
                                                    <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                    <option value="Rp. 2.000.000 - Rp. 2.999.999">Rp. 2.000.000 - Rp. 2.999.999</option>
                                                    <option value="Rp. 3.000.000 - Rp. 3.999.999">Rp. 3.000.000 - Rp. 3.999.999</option>
                                                    <option value="Rp. 4.000.000 - Rp. 4.999.999">Rp. 4.000.000 - Rp. 4.999.999</option>
                                                    <option value="Rp. 5.000.000 - Rp. 5.999.999">Rp. 5.000.000 - Rp. 5.999.999</option>
                                                    <option value="> Rp. 6.000.000">> Rp. 6.000.000</option>
                                                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                </select>

                                                <label class="control-label mt-3" for="nik_ibu">NIK</label>
                                                <input type="text" name="nik_ibu" class="form-control" placeholder="NIK Ibu" value="<?=$nik_ibu?>">
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" name="editsiswa" >Submit</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                        </form> 
                                </div>
                            </div>
                        </div>


                            <!-- Modal Delete -->
                            <div class="modal fade" id="delete<?=$idsiswa?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Data <?=$nama_siswa?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        
                                        <form method="post">
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus Data Siswa ini ?
                                                    <input type="hidden" name="idsiswa" value="<?=$idsiswa;?>">
                                                    <input type="hidden" name="foto" value="<?=$foto;?>">
                                            
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" name="hapussiswa" >Hapus</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                            </div>

                                        </form> 
                                    </div>
                                </div>
                            </div>



                            <?php }}else{ ?> 
                            <tr class="text-center">
                                <td colspan="7">Data tidak ada</td>
                            </tr>

                            

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    


    


            
            


            
    
    
</div>
<!-- /.container-fluid -->

                        


<?php include('../template/footer.php'); ?> 

<!-- Tambah Data -->
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Siswa</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

                <form action="data-siswa-control.php" method="POST" enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="modal-body">
                    <label class="control-label" for="nipd">NIPD</label>
                                                <input type="text" name="nipd" id="nipd" class="form-control" placeholder="">

                                                <label class="control-label" for="nama_siswa">Nama Siswa</label>
                                                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="" onkeyup="this.value = this.value.toUpperCase()">

                                                <label class="control-label mt-3" for="username">Username</label>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="jk">Jenis Kelamin</label>
                                                <select class="form-control" id="jk" name="jk" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="Laki-laki">L</option>
                                                    <option value="Perempuan">P</option>
                                                </select>

                                                <label class="control-label mt-3" for="nisn">NISN</label>
                                                <input type="text" name="nisn" id="nisn" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="tpt_lahir">Tempat Lahir</label>
                                                <input type="text" name="tpt_lahir" id="tpt_lahir" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="tgl_lahir">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="nik_siswa">NIK</label>
                                                <input type="text" name="nik_siswa" id="nik_siswa" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="agama">Agama</label>
                                                <select class="form-control" id="agama" name="agama" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="ISLAM">ISLAM</option>
                                                    <option value="KATOLIK">KATOLIK</option>
                                                    <option value="PROTESTAN">PROTESTAN</option>
                                                    <option value="HINDU">HINDU</option>
                                                    <option value="BUDHA">BUDHA</option>
                                                    <option value="KONGHUCU">KONGHUCU</option>
                                                </select>

                                                <label class="control-label mt-3" for="alamat">Alamat Lengkap</label>
                                                <textarea name="alamat" id="alamat" class="form-control"></textarea>

                                                <label class="control-label mt-3" for="jns_tinggal">Jenis Tinggal</label>
                                                <input type="text" name="jns_tinggal" id="jns_tinggal" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="transportasi">Transportasi</label>
                                                <input type="text" name="transportasi" id="transportasi" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="rombel">Rombongan Belajar</label>
                                                <select class="form-control" id="rombel" name="rombel" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="A">A</option>
                                                    <option value="B1">B1</option>
                                                    <option value="B2">B2</option>
                                                </select>

                                                <label class="control-label mt-3" for="no_telp">Nomor Telepon</label>
                                                <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="email">Email</label>
                                                <input type="text" name="email" id="email" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="skhun">SKHUN</label>
                                                <input type="text" name="skhun" id="skhun" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="penerima_kps">Penerima KPS</label>
                                                <select class="form-control" id="penerima_kps" name="penerima_kps" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>

                                                <label class="control-label mt-3" for="no_kps">No KPS</label>
                                                <input type="text" name="no_kps" id="no_kps" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="foto">Foto</label>
                                                <input type="file" name="foto" class="form-control" id="foto" required>

                                                <!-- DATA AYAH -->
                                                <label class="control-label mt-3" for="nama_ayah">Nama Ayah</label>
                                                <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="" onkeyup="this.value = this.value.toUpperCase()">

                                                <label class="control-label mt-3" for="thn_lahir_ayah">Tahun Lahir</label>
                                                <input type="text" name="thn_lahir_ayah" id="thn_lahir_ayah" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="pendidikan_ayah">Pendidikan</label>
                                                <select class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="-">-</option>
                                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                </select>

                                                <label class="control-label mt-3" for="pekerjaan_ayah">Pekerjaan</label>
                                                <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" placeholder="">

                                                <label class="control-label mt-3" for="penghasilan_ayah">Penghasilan</label>
                                                <select class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="< Rp. 500.000">< Rp. 500.000</option>
                                                    <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                    <option value="Rp. 2.000.000 - Rp. 2.999.999">Rp. 2.000.000 - Rp. 2.999.999</option>
                                                    <option value="Rp. 3.000.000 - Rp. 3.999.999">Rp. 3.000.000 - Rp. 3.999.999</option>
                                                    <option value="Rp. 4.000.000 - Rp. 4.999.999">Rp. 4.000.000 - Rp. 4.999.999</option>
                                                    <option value="Rp. 5.000.000 - Rp. 5.999.999">Rp. 5.000.000 - Rp. 5.999.999</option>
                                                    <option value="> Rp. 6.000.000">> Rp. 6.000.000</option>
                                                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                </select>

                                                <label class="control-label mt-3" for="nik_ayah">NIK</label>
                                                <input type="text" name="nik_ayah" id="nik_ayah" class="form-control" placeholder="">

                                                <!-- DATA IBU -->
                                                <label class="control-label mt-3" for="nama_ibu">Nama Ibu</label>
                                                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="" onkeyup="this.value = this.value.toUpperCase()">

                                                <label class="control-label mt-3" for="thn_lahir_ibu">Tahun Lahir</label>
                                                <input type="text" name="thn_lahir_ibu" id="thn_lahir_ibu" class="form-control" placeholder="" >

                                                <label class="control-label mt-3" for="pendidikan_ibu">Pendidikan</label>
                                                <select class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="-">-</option>
                                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                </select>

                                                <label class="control-label mt-3" for="pekerjaan_ibu">Pekerjaan</label>
                                                <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" placeholder="" >

                                                <label class="control-label mt-3" for="penghasilan_ibu">Penghasilan</label>
                                                <select class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" required="">
                                                    <option value="">Pilih</option>
                                                    <option value="< Rp. 500.000">< Rp. 500.000</option>
                                                    <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                    <option value="Rp. 2.000.000 - Rp. 2.999.999">Rp. 2.000.000 - Rp. 2.999.999</option>
                                                    <option value="Rp. 3.000.000 - Rp. 3.999.999">Rp. 3.000.000 - Rp. 3.999.999</option>
                                                    <option value="Rp. 4.000.000 - Rp. 4.999.999">Rp. 4.000.000 - Rp. 4.999.999</option>
                                                    <option value="Rp. 5.000.000 - Rp. 5.999.999">Rp. 5.000.000 - Rp. 5.999.999</option>
                                                    <option value="> Rp. 6.000.000">> Rp. 6.000.000</option>
                                                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                </select>

                                                <label class="control-label mt-3" for="nik_ibu">NIK</label>
                                                <input type="text" name="nik_ibu" id="nik_ibu" class="form-control" placeholder="" >
                    </div>
    
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" name="tambahsiswa" value="Simpan">
                            <!-- <button type="submit" class="btn btn-success" name="submit" >Submit</button> -->
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                </form>
        </div>
    </div>
</div>