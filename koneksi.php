<?php
    try{
        $getkoneksi = new PDO("mysql:host=localhost;dbname=tugas_3_php","root","");
        // echo "koneksi berhasil";
    }catch(PDOException $e){
        echo $e->getMessage();
        // echo "koneksi gagal";
    }
?>