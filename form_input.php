<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
        body{
            overflow: hidden;
            background: #f2f2f2;
        }
        .form-control{
            width: 500px;
        }
        .form-group{
            margin-top: 150px;
            margin-left: -50%;
            width: 200%;
            /* border: 1px solid black;  */
        }
        .form-group hr{
            width: 35%;
        }
        .input-group-text{
            width: 125px;
        }
    </style>
</head>
<center>
<body>
    <form action="#" method="post">
        <div class="form-group">

            <h4>FORM INPUT MASTER dan Stock DATA BARANG</h4>

            <hr>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Nama Produk</div>
                    </div>
                        <input type="text" class="form-control" placeholder="Nama Produk">
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Harga Produk</div>
                    </div>
                        <input type="number" class="form-control" placeholder="Harga Produk">
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text" for="inputGroupSelect01">Kategori</div>
                    </div>
                        <select class="custom-select mr-sm-2">
                            <option value="null">Pilih Kategori</option>
                            <option value="1">Makanan</option>
                            <option value="2">Minuman</option>
                            <option value="3">Snack</option>
                        </select>
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">URL Gambar</div>
                    </div>
                        <input type="url" class="form-control" placeholder="URL Gambar">
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Stok Awal</div>
                    </div>
                        <input type="number" class="form-control" placeholder="Stok awal">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>
    </form>
</body>
</center>
</html>