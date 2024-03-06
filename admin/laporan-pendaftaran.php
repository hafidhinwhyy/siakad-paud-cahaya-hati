<?php include ('../config/autoload.php'); ?>
<?php include ('laporan-pendaftaran-control.php'); ?>
<?php include('../template/header.php'); ?> 

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan Pendaftaran</h1>

    <a href="<?= $base_url ?>/cetak/data-pendaftar.php" class="btn btn-warning btn-sm mb-3" target="_blank">Cetak Data Pendaftar PDF</a>
    <a href="<?= $base_url ?>/cetak/data-excel.php" class="btn btn-success btn-sm mb-3" target="_blank">Cetak Data Pendaftar EXCEL</a>
    <div class="row">
        <div class="col-md-12">
            <table id="data-table" class="table table-bordered table-hover" width="100%">
                <thead>
                    <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Nama</td>
                        <td class="text-center">Alamat</td>
                        <td class="text-center">Kelas</td>
                        <td class="text-center">Username</td>
                        <td class="text-center">Aksi</td>
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
                            <a href="<?= $base_url ?>/cetak/detail-cetak.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm" target="_blank">Cetak</a>
                        </td>    
                    </tr>
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