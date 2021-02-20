<?php
require 'functions.php';

if(isset($_POST["submit"])) {
    if(tambahPelanggan($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan')
            document.location.href = 'tampil_pelanggan.php'
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
                    <h1 class="h3 mb-2 text-gray-800">Input Pelanggan</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Pelanggan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="" method='post'>
    <ul class='form-ul'>
        <li>
            <input type="hidden" name='id_pelanggan' id='id_pelanggan' required autocomplete='off'>   
        </li>
        <li>
            <label for="nama_pelanggan">nama pelanggan: </label> 
            <input type="text" name='nama_pelanggan' id='nama_pelanggan' required autocomplete='off'>   
        </li>
        <li>
            <label for="no_tlp">no telephone: </label> 
            <input type="text" name='no_tlp' id='no_tlp' required autocomplete='off'>   
        </li>
        <li>
            <label for="status">status: </label> 
            <select name='status' id='status' >
                <option>Non Member</option>
                <option>Member</option>
            </select>   
        </li>
        <br>
        <button type='submit' name='submit' class='button'>Tambah Data</button>
    </ul>
    </form>
<?php
include "footer.php";

?>
 