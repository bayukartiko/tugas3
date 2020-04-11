<?php
    include('C:\xampp\htdocs\projectphp\tugas3\koneksi\koneksi.php');
    $result = $getkoneksi->query('SELECT * FROM `databarang`');
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
</head>
<body>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Gambar</th>
                <th scope="col">Stok</th>
                <th scope="col">Modify</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $data) { ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $data['kode_barang'] ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['harga_barang'] ?></td>
                <td><?php echo $data['kategori'] ?></td>
                <td><?php echo $data['url'] ?></td>
                <td><?php echo $data['stok'] ?></td>
                <td>
                    <button type="button" class="btn btn-outline-success">Edit</button>
                    <button type="button" class="btn btn-outline-danger">Hapus</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>