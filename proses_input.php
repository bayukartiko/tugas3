<?php
    include('C:\xampp\htdocs\projectphp\tugas3\koneksi\koneksi.php');

    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $satuan = $_POST['satuan'];
    $url = $_POST['gambar'];
    $stok = $_POST['stok'];

    $result = $getkoneksi->exec("INSERT INTO `databarang` (`kode_barang`, `tanggal`, `nama_barang`, `harga_barang`, `kategori`, `satuan`, `url`, `stok`) VALUES (NULL, '$tanggal', '$nama', '$harga', '$kategori', '$satuan', '$url', '$stok');");
    echo $result;

    if($result==true){
        // echo "data berhasil disimpan";
        header("location: http://localhost/projectphp/tugas3/form/form_data.php");
        $message = "data berhasil disimpan";
        echo "<script type='text/javascript'>alert('$message');</script>";
        exit;
    }else{
        echo "data gagal disimpan";
        $message = "data gagal disimpan";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>