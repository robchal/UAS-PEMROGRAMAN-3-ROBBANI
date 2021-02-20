<?php
require 'functions.php';
$query = query("SELECT * FROM barang ");

?>

<?php
include 'header.php';
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Tampil Kategori</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Kategori</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                    <th>id_kategori</th>
                                    <th>nama</th>
                                </tr>
                                <?php forEach($query as $qr) :?>
                                    <tr>
                                        <td><?= $qr["id_kategori"] ?></td>
                                        <td><?= $qr["nama"] ?></td>
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