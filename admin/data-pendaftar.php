<?php include ('../config/autoload.php'); ?>
<?php include ('data-pendaftar-control.php'); ?>
<?php include('../template/header.php'); ?> 

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pendaftar</h1>
    
    <div class="row">
        <!-- <div class="col-12">
            <?php if(isset($_SESSION['pesan_sukses'])) { ?>
                <div class="alert alert-info"><?= $_SESSION['pesan_sukses'] ?></div>
                    <?php } 
                        unset($_SESSION['pesan_sukses']);
                    ?>
                </div> -->
        <div class="col-md-12">
            <table id="data-table" class="table table-bordered table-hover" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while($p = mysqli_fetch_array($all_pendaftar)) {  ?>
                        
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['alamat'] ?></td>
                            <td><?= $p['kelas'] ?></td>
                            <td><?= $p['username'] ?></td>
                            <td>
                                <a href="detail-pendaftar.php?id=<?= $p['id']?>" class="btn btn-primary btn-sm">Tampilkan</a>
                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalhapus<?= $p['id'] ?>">Hapus</a>
                            </td>    
                        </tr>


                                        <!-- Modal -->
                                            <div class="modal fade" id="modalhapus<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin ?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <p>Anda akan menghapus data pendaftar atas nama "<?= $p['nama'] ?>" . 
                                                                <br>
                                                                <b> DATA AKAN DIHAPUS PERMANEN.<b>
                                                                </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?= $base_url ?>/admin/data-pendaftar.php?action=hapus&id=<?= $p['id'] ?>" class="btn btn-danger">Hapus</a>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php  } 
                                                if(mysqli_num_rows($all_pendaftar) == 0) {
                                                    echo "<tr><td colspan='6' align='center'><b>Belum Ada Pendaftar Baru</b></td></tr>";
                                                }
                                            ?>    
                                        </tbody>      
                                    </table>
                                </div>
                            </div>
                        </div>    
                <!-- /.container-fluid -->

<?php include('../template/footer.php'); ?> 