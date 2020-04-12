<?php
    include('C:\xampp\htdocs\projectphp\tugas3\koneksi\koneksi.php');
    $result = $getkoneksi->query('SELECT * FROM `databarang`');
        
    if(isset($_GET['info'])){
        $info = $_GET['info'];

        if($info=='hapus'){
            $message = "data berhasil dihapus";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }elseif($info=='edit'){
            $message = "data berhasil diedit";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
        table{
            text-align: center;
        }
        .bgmerah{
            background: red;
            color: white;
        }
    </style>
</head>
<body>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Tanggal Input</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Satuan</th>
                <th scope="col">Gambar</th>
                <th scope="col">Stok</th>
                <th scope="col">Modify</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $data) { ?>
            <tr>
                <th scope="row">
                    <?php 
                        for($i = 0; $i < 1; $i++){
                            echo $nomor = $i + 1;
                        }
                    ?>
                </th>
                <td><?php echo $data['kode_barang'] ?></td>
                <td><?php echo $data['tanggal'] ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo "Rp.".$data['harga_barang'] ?></td>
                
                <td>
                    <?php 
                        if($data['kategori'] == 1){
                            echo "Makanan";
                        }elseif($data['kategori'] == 2){
                            echo "Minuman";
                        }elseif($data['kategori'] == 3){
                            echo "Snack";
                        }elseif($data['kategori'] == 4){
                            echo "Lainnya";
                        }
                    ?>
                </td>
                
                <td><?php echo $data['satuan'] ?></td>
                <td>
                    <img src='<?php echo $data['url'] ?>' style='width: 100px; height: 100px;' alt='gambar'>
                </td>
                
                <?php if($data['stok'] < 5){ ?>
                    <td class="bgmerah"><?php echo $data['stok'] ?></td>
                <?php }else{ ?>
                    <td><?php echo $data['stok'] ?></td>
                <?php } ?>    

                <td>
                    <button type="button" class="btn btn-outline-success">
                        <a href="form_edit.php?key=<?php echo $data['kode_barang']; ?>">Edit</a>
                    </button>

                    <button type="button" class="btn btn-outline-danger">
                        <a href="proses_hapus.php?key=<?php echo $data['kode_barang']; ?>">Hapus</a>
                    </button>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="10">
                    <center>
                        <form action="form_input.php">
                            <button type="submit" class="btn btn-primary">Kembali Ke Form Input</button>
                        </form>
                    </center>
                </td>
            </tr>
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
</body>
</html>