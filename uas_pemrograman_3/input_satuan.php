<?php
require 'functions.php';

if(isset($_POST["submit"])) {
    if(tambahSatuan($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan')
            document.location.href = 'tampil_barang.php'
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
                    <h1 class="h3 mb-2 text-gray-800">Input Satuan</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Satuan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="" method='post'>
    <ul class='form-ul'>
        <li> 
            <input type="hidden" name='id_kategori' id='id_kategori' required autocomplete='off'>   
        </li>
        <li>
            <label for="nama">Nama: </label> 
            <input type="text" name='nama' id='nama' required autocomplete='off'>   
        </li>
        <br>
        <button type='submit' name='submit' class='button'>Tambah Data</button>
    </ul>
    </form>

<?php 
include "footer.php";

?>