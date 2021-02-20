<?php
require 'functions.php';
$query = query("SELECT * FROM barang");
$queryPel = query("SELECT * FROM pelanggan");
$queryCat = query("SELECT * FROM kategori");
if(isset($_POST["submit"])) {
    if(transaksi($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan')
            document.location.href = 'tampil_transaksi.php'
            </script>";
    }else {
        echo "<script>
                alert('Data gagal ditambahkan')
                
            </script>";
    };
}
?>


<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Input Transaksi</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="" method='post'>
    <ul class='form-ul'>
        <li>
            <input type="hidden" name='id_transaksi' id='id_transaksi' required autocomplete='off'>   
        </li>
        <li>
            <label for="nama_transaksi">nama_transaksi: </label> 
            <input type="text" name='nama_transaksi' id='nama_transaksi' required autocomplete='off'>   
        </li>
        <li>
            <input type="hidden" name='harga' id='harga' autocomplete='off'>   
        </li>
        <li>
            <label for="qty">quantity: </label> 
            <input type="text" name='qty' id='qty' required autocomplete='off'>   
        </li>
        <li>
            <label for="id_barang">id_barang: </label> 
            <select name='id_barang' id='id_barang'> 
            <?php foreach($query as $q) : ?>
                <option value="<?= $q["nama"] ?>"><?= $q["nama"]?></option>
            <?php endforeach ; ?>
            </select>  
        </li>
        <li>
            <input type="hidden" name='diskon' id='diskon' required autocomplete='off'>   
        </li>
        <li>
            <label for="id_pelanggan">pelanggan: </label> 
            <select name='id_pelanggan' id='id_pelanggan'> 
            <?php foreach($queryPel as $q) : ?>
                <option value="<?= $q["nama_pelanggan"] ?>"><?= $q["nama_pelanggan"]?></option>
            <?php endforeach ; ?>
            </select>  
        </li>
        <br>
        <button type='submit' name='submit' class='button'>Tambah Data</button>
    </ul>
    </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>