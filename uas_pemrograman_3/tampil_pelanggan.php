<?php
require 'functions.php';
$query = queryPelanggan("SELECT * FROM pelanggan");
?>

<?php
include 'header.php';
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Tampil Pelanggan</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Pelanggan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id_pelanggan</th>
                                                <th>nama</th>
                                                <th>no telephone</th>
                                                <th>status</th>
                                            </tr>
                                            <?php forEach($query as $qr) :?>
                                                <tr>
                                                    <td><?= $qr["id_pelanggan"] ?></td>
                                                    <td><?= $qr["nama_pelanggan"] ?></td>
                                                    <td><?= $qr["no_tlp"] ?></td>
                                                    <td><?= $qr["status"] ?></td>
                                            </tr>
                                    <?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php
include 'footer.php';
?>