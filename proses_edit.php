<?php
include('C:\xampp\htdocs\projectphp\tugas3\koneksi\koneksi.php');

$primarykey = $_POST['kodeb'];  

$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$satuan = $_POST['satuan'];
$url = $_POST['gambar'];
$stok = $_POST['stok'];

$result = $getkoneksi->query("UPDATE `databarang` SET `tanggal` = '$tanggal', `nama_barang` = '$nama', `harga_barang` = '$harga', `kategori` = '$kategori', `satuan` = '$satuan', `url` = '$url', `stok` = '$stok' WHERE `databarang`.`kode_barang` = $primarykey");
if($result==TRUE){
    // echo "data berhasil disimpan";
    header("location: http://localhost/projectphp/tugas3/form/form_data.php?info=edit");
    $message = "data berhasil disimpan";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // exit;
}else{
    echo "data gagal disimpan";
    $message = "data gagal disimpan";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>