<?php
require 'functions.php';
$query = query("SELECT * FROM barang ");

?>

<?php
include "header.php";

?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Tampil Barang</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Tampil Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
            <th>id_barang</th>
            <th>nama</th>
            <th>harga</th>
            <th>id_kategori</th>
            <th>id_satuan</th>
        </tr>
        <?php forEach($query as $q) :?>
            <tr>
                <td><?= $q["id_barang"] ?></td>
                <td><?= $q["nama"] ?></td>
                <td>RP <?= $q["harga"] ?></td>
                <td><?= $q["id_kategori"] ?></td>
                <td><?= $q["id_satuan"] ?></td>
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

            
            <div class="kategori-satuan">
                <a href="input_barang.php"><p>Input Barang</p></a>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
<?php
include "footer.php";
?>