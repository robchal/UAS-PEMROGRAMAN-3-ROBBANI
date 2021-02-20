<?php
require 'functions.php';
$query = query("SELECT * FROM kategori ");
$querySatuan = query("SELECT * FROM satuan ");
if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
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


        <div class="kategori-satuan">
            <a href="input_kategori.php"><p>Input Kategori</p></a>
            <a href="input_satuan.php"><p>Input Satuan</p></a>
        </div>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Input Barang</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="" method='post'>
    <ul class="form-ul">
        <li>

            <input type="hidden" name='id_barang' id='id_barang' required autocomplete='off'>   
        </li>
        <li>
            <label for="nama">Nama: </label> 
            <input type="text" name='nama' id='nama' required autocomplete='off'>   
        </li>
        <li>
            <label for="harga">Harga: </label> 
            <input type="text" name='harga' id='harga' required autocomplete='off'>   
        </li>
        <li>
            <label for="id_kategori">id_kategori: </label> 
            <select name='id_kategori' id='id_kategori'> 
            <?php foreach($query as $q) : ?>
                <option value="<?= $q["nama"] ?>"><?= $q["nama"]?></option>
            <?php endforeach ; ?>
            </select>  
        </li>
        <li>
            <label for="id_satuan">id_satuan: </label> 
            <select name='id_satuan' id='id_satuan'> 
            <?php foreach($querySatuan as $qs) : ?>
                <option value="<?= $qs["nama"] ?>"><?= $qs["nama"]?></option>
            <?php endforeach ; ?>
            </select>  
        </li>
        <br>
        <button type='submit' name='submit' class='button'>Tambah Data</button>
    </ul>
    </form>
        
<?php
include "footer.php";
?>