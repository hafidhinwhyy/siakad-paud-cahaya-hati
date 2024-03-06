<?php include ('../config/autoload.php'); ?>
<?php include ('editprofil-control.php'); ?>
<?php include('../template/header.php'); ?>  

    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">EDIT PROFIL</h1>
                    <form class="user" method="POST" action="<?= $base_url?>/siswa/editprofil.php" 
                    enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                            <label for="identitas_anak"><b>Identitas Anak :</b></label>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control"
                                            id="nama" placeholder="Nama Anda" value="<?= $data_pendaftar['nama']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_panggil">Nama Panggilan</label>
                                        <input type="text" name="nama_panggil" class="form-control"
                                            id="nama_panggil" placeholder="Nama Anda" value="<?= $data_pendaftar['nama_panggil']?>">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control"
                                                id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $data_pendaftar['tempat_lahir']?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control"
                                                id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $data_pendaftar['tanggal_lahir']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <?php 
                                            $laki = "";
                                            $perempuan = "";
                                            if($data_pendaftar['jenis_kelamin'] == "L") {
                                                $laki = "checked";
                                            } else {
                                                $perempuan = "checked";
                                            }
                                            
                                            ?>

                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" value="L" class="form-check-input"
                                                    id="laki" value="L" <?= $laki ?>>
                                                <label for="laki" class="form-check-label">Laki-Laki</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" name="jenis_kelamin" value="P" class="form-check-input"
                                                    id="perempuan" value="P" <?= $perempuan ?>>
                                                <label for="perempuan" class="form-check-label">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="kelas">Kelas</label>
                                            <?php 
                                                $play_grup = "";
                                                $kelas_a = "";
                                                $kelas_b = "";
                                                if($data_pendaftar['kelas'] == "Play Grup") {
                                                    $play_grup = "checked";
                                                } elseif ($data_pendaftar['kelas'] == "Kelas A") {
                                                    $kelas_a = "checked";
                                                } else {
                                                    $kelas_b = "checked";
                                                }
                                            
                                            ?>

                                            <div class="form-check">
                                                <input type="radio" name="kelas" value="Play Grup" class="form-check-input"
                                                    id="play_grup" value="Play Grup" <?= $play_grup ?>>
                                                <label for="play_grup" class="form-check-label">Play Grup</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" name="kelas" value="Kelas A" class="form-check-input"
                                                    id="kelas_a" value="Kelas A" <?= $kelas_a ?>>
                                                <label for="kelas_a" class="form-check-label">Kelas A</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" name="kelas" value="Kelas B" class="form-check-input"
                                                    id="kelas_b" value="Kelas B" <?= $kelas_b ?>>
                                                <label for="kelas_b" class="form-check-label">Kelas B</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="anak_ke">Anak Ke-</label>
                                        <input type="text" name="anak_ke" class="form-control"
                                            id="anak_ke" placeholder="" value="<?= $data_pendaftar['anak_ke']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="berat_badan">Berat Badan</label>
                                        <input type="text" name="berat_badan" class="form-control"
                                            id="berat_badan" placeholder="" value="<?= $data_pendaftar['berat_badan']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="tinggi_badan">Tinggi Badan</label>
                                        <input type="text" name="tinggi_badan" class="form-control"
                                            id="tinggi_badan" placeholder="Nama Anda" value="<?= $data_pendaftar['tinggi_badan']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat Rumah</label>
                                        <textarea name="alamat" id="alamat" class="form-control"><?= $data_pendaftar['alamat']?></textarea>
                                    </div>
                                    
                                    <label for="kondisi_anak" class="mt-3"><b>Kondisi Anak :</b></label>
                                    <div class="form-group">
                                        <label for="berat_badan_lahir">Berat Badan Lahir</label>
                                        <input type="text" name="berat_badan_lahir" class="form-control"
                                            id="berat_badan_lahir" placeholder="" value="<?= $data_pendaftar['berat_badan_lahir']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="penyakit_sering_diderita">Penyakit yang Sering Diderita</label>
                                        <input type="text" name="penyakit_sering_diderita" class="form-control"
                                            id="penyakit_sering_diderita" placeholder="" value="<?= $data_pendaftar['penyakit_sering_diderita']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="penyakit_pernah_diderita">Penyakit yang Pernah Diderita</label>
                                        <input type="text" name="penyakit_pernah_diderita" class="form-control"
                                            id="penyakit_pernah_diderita" placeholder="" value="<?= $data_pendaftar['penyakit_pernah_diderita']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="pantangan_makan">Pantangan Makan</label>
                                        <input type="text" name="pantangan_makan" class="form-control"
                                            id="pantangan_makan" placeholder="" value="<?= $data_pendaftar['pantangan_makan']?>">
                                    </div>

                                    <label for="identitas_ortu" class="mt-3"><b>Identitas Orang Tua</b></label>
                                    <br>
                                    <label for="identitas_ayah" class="mt-1"><b>Ayah :</b></label>

                                    <div class="form-group">
                                        <label for="nama_ayah_kdg">Nama Ayah Kandung</label>
                                        <input type="text" name="nama_ayah_kdg" class="form-control"
                                            id="nama_ayah_kdg" placeholder="Nama Anda" value="<?= $data_pendaftar['nama_ayah_kdg']?>">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                                            <input type="text" name="tempat_lahir_ayah" class="form-control"
                                                id="tempat_lahir_ayah" placeholder="Tempat Lahir" value="<?= $data_pendaftar['tempat_lahir_ayah']?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                                            <input type="date" name="tanggal_lahir_ayah" class="form-control"
                                                id="tanggal_lahir_ayah" placeholder="Tanggal Lahir" value="<?= $data_pendaftar['tanggal_lahir_ayah']?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pendidikan_akhir_ayah">Pendidikan Terakhir Ayah</label>
                                        <input type="text" name="pendidikan_akhir_ayah" class="form-control"
                                            id="pendidikan_akhir_ayah" placeholder="" value="<?= $data_pendaftar['pendidikan_akhir_ayah']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control"
                                            id="pekerjaan_ayah" placeholder="" value="<?= $data_pendaftar['pekerjaan_ayah']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="telepon_ayah">Telepon Ayah</label>
                                        <input type="text" name="telepon_ayah" class="form-control"
                                            id="telepon_ayah" placeholder="" value="<?= $data_pendaftar['telepon_ayah']?>">
                                    </div>

                                    <label for="identitas_ibu" class="mt-1"><b>Ibu :</b></label>

                                    <div class="form-group">
                                        <label for="nama_ibu_kdg">Nama Ibu Kandung</label>
                                        <input type="text" name="nama_ibu_kdg" class="form-control"
                                            id="nama_ibu_kdg" placeholder="Nama Anda" value="<?= $data_pendaftar['nama_ibu_kdg']?>">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                                            <input type="text" name="tempat_lahir_ibu" class="form-control"
                                                id="tempat_lahir_ibu" placeholder="Tempat Lahir" value="<?= $data_pendaftar['tempat_lahir_ibu']?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                                            <input type="date" name="tanggal_lahir_ibu" class="form-control"
                                                id="tanggal_lahir_ibu" placeholder="Tanggal Lahir" value="<?= $data_pendaftar['tanggal_lahir_ibu']?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pendidikan_akhir_ibu">Pendidikan Terakhir Ibu</label>
                                        <input type="text" name="pendidikan_akhir_ibu" class="form-control"
                                            id="pendidikan_akhir_ibu" placeholder="" value="<?= $data_pendaftar['pendidikan_akhir_ibu']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control"
                                            id="pekerjaan_ibu" placeholder="" value="<?= $data_pendaftar['pekerjaan_ibu']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="telepon_ibu">Telepon Ibu</label>
                                        <input type="text" name="telepon_ibu" class="form-control"
                                            id="telepon_ibu" placeholder="" value="<?= $data_pendaftar['telepon_ibu']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat_ortu">Alamat Orang Tua</label>
                                        <textarea name="alamat_ortu" id="alamat_ortu" class="form-control"><?= $data_pendaftar['alamat_ortu']?></textarea>
                                    </div>

                                    <label for="identitas_wali" class="mt-1"><b>Identitas Wali :</b></label>

                                    <div class="form-group">
                                        <label for="nama_wali">Nama Wali</label>
                                        <input type="text" name="nama_wali" class="form-control"
                                            id="nama_wali" placeholder="Nama Anda" value="<?= $data_pendaftar['nama_wali']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="pendidikan_akhir_wali">Pendidikan Terakhir Wali</label>
                                        <input type="text" name="pendidikan_akhir_wali" class="form-control"
                                            id="pendidikan_akhir_wali" placeholder="" value="<?= $data_pendaftar['pendidikan_akhir_wali']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                        <input type="text" name="pekerjaan_wali" class="form-control"
                                            id="pekerjaan_wali" placeholder="" value="<?= $data_pendaftar['pekerjaan_wali']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="telepon_wali">Telepon Wali</label>
                                        <input type="text" name="telepon_wali" class="form-control"
                                            id="telepon_wali" placeholder="" value="<?= $data_pendaftar['telepon_wali']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat_wali">Alamat Wali</label>
                                        <textarea name="alamat_wali" id="alamat_wali" class="form-control"><?= $data_pendaftar['alamat_wali']?></textarea>
                                    </div>

                                    <label for="akun" class="mt-3"><b>Akun</b></label>

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="username" name="username" class="form-control"
                                            id="username" placeholder="username" value="<?= $data_pendaftar['username']?>">
                                    
                                    </div>
                            </div>

                            <div class="col-md-4">
                                <?php 
                                    if(isset($data_pendaftar['foto']) && $data_pendaftar['foto'] != '') {
                                        $foto = '../uploads/siswa/'.$data_pendaftar['foto'];
                                    } else {
                                        $foto = '../assets1/img/avatar.jpg';
                                    }
                                ?>
                                <img src="<?= $foto ?>" alt="foto profil" class="img-fluid">

                                <!-- <input type="file" name="gambar" class="form-control mt-2"> -->
                                <input type="hidden" name="foto_lama" value="<?= $data_pendaftar['foto'] ?>">
                                <input type="file" name="foto_baru" class="input-control">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="btn_simpan" value="simpan_profil" class="btn btn-primary mb-5">Simpan Perubahan</button>
                                <a href="dashboard.php" class="btn btn-danger mb-5">Kembali</a>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <!-- /.container-fluid -->

<?php include('../template/footer.php'); ?>  
