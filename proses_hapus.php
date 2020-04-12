<?php
include('C:\xampp\htdocs\projectphp\tugas3\koneksi\koneksi.php');

$key = $_GET['key'];
$result = $getkoneksi->query("DELETE FROM `databarang` WHERE `kode_barang` = $key");

if($result==TRUE){
    header("location: http://localhost/projectphp/tugas3/form/form_data.php?info=hapus");
    $message = "data berhasil dihapus";
    echo "<script type='text/javascript'>alert('$message');</script>";
}else{
    // echo "data gagal disimpan";
        $message = "data gagal dihapus";
        echo "<script type='text/javascript'>alert('$message');</script>";
}
?>