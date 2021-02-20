<?php
$conn = mysqli_connect("localhost","root","","toko");

function query($query) {
    global $conn;
    $tableQuery = mysqli_query($conn,$query);
    $lists = [];
    while($datas = mysqli_fetch_assoc($tableQuery)){
        $lists[] = $datas;
    };
    return $lists;
}

function queryPelanggan($query) {
    global $conn;
    $tableQuery = mysqli_query($conn,$query);
    $lists = [];
    while($datas = mysqli_fetch_assoc($tableQuery)){
        $lists[] = $datas;
    };
    return $lists;
}

function tambah($data) {
    global $conn;
    $id_barang = $data["id_barang"];
    $nama = $data["nama"];
    $harga = $data["harga"];
    $id_kategori = $data["id_kategori"];
    $id_satuan = $data["id_satuan"];
    $query = "INSERT INTO barang VALUES('$id_barang','$nama','$id_kategori','$id_satuan','$harga')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
};

function tambahSatuan($data) {
    global $conn;
    $nama = $data["nama"];
    $id_satuan = $data["id_satuan"];
    $query = "INSERT INTO satuan VALUES('$id_satuan','$nama')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
};

function tambahKategori($data) {
    global $conn;
    $nama = $data["nama"];
    $id_kategori = $data["id_kategori"];
    $query = "INSERT INTO kategori VALUES('$id_kategori','$nama')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
};

function tambahPelanggan($data) {
    global $conn;
    $nama = $data["nama_pelanggan"];
    $id_pelanggan = $data["id_pelanggan"];
    $no_tlp = $data["no_tlp"];
    $status = $data["status"];
    $query = "INSERT INTO pelanggan VALUES('$id_pelanggan','$nama','$no_tlp','$status')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
};

function transaksi($data) {
    global $conn;
    $id_transaksi = $data["id_transaksi"];
    $nama_transaksi = rand();
    $tgl_transaksi = date("l, d-M-Y");
    $fetchBarang =  $data["id_barang"];
    $harga = query("SELECT * FROM barang WHERE nama = '$fetchBarang'");
    $hargaBarang = $harga[0]["harga"];
    $qty = $data["qty"];
    $id_barang = $data["id_barang"];
    $fetchPelanggan = $data['id_pelanggan'];
    $diskon = query("SELECT * FROM pelanggan WHERE nama_pelanggan = '$fetchPelanggan'");
    $statusPelanggan = $diskon[0]["status"];
    $diskonTransaksi = 0;
    if($statusPelanggan == "Member") {
        $diskonTransaksi += 0.05;
    }
    $id_pelanggan = $data["id_pelanggan"];
    $query = "INSERT INTO transaksi VALUES('$id_transaksi','$nama_transaksi','$tgl_transaksi','$hargaBarang','$qty','$id_barang','$diskonTransaksi','$id_pelanggan')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
};



?>