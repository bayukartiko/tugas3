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
        .custom-control{
            margin-left: 6.5px;
            margin-top: 6.5px;
        }
            /* .satuan{
                position: absolute;
                width: 500px;
            } */
    </style>
</head>
<center>
<body>
    <form action="proses_input.php" method="post" name="forminput">
        <div class="form-group">

            <h4>FORM INPUT MASTER dan Stock DATA BARANG</h4>

            <hr>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Kode Barang</div>
                    </div>
                        <input type="text" class="form-control" placeholder="Kode Barang Otomatis" disabled>
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">tanggal input</div>
                    </div>
                        <input type="date" name="tanggal" class="form-control">
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Nama Barang</div>
                    </div>
                        <input type="text" class="form-control" placeholder="Nama Barang" name="nama" required>
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Harga Barang</div>
                    </div>
                        <input type="number" class="form-control" placeholder="Harga Barang" name="harga" required>
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text" for="inputGroupSelect01">Kategori</div>
                    </div>
                        <select class="custom-select" name="kategori" required>
                            <option>Pilih Kategori</option>
                            <option value="1">Makanan</option>
                            <option value="2">Minuman</option>
                            <option value="3">Snack</option>
                            <option value="4">Lainnya</option>
                        </select>
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <!-- <div class="input-group-prepend"> -->
                        <div class="input-group-text satuan">Satuan</div>
                    <!-- </div> -->
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="satuan" value="box" class="custom-control-input" required>
                        <label class="custom-control-label" for="customRadioInline1">Box</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="satuan" value="pcs" class="custom-control-input" required>
                        <label class="custom-control-label" for="customRadioInline2">Picies (pcs)</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="satuan" value="kiloan" class="custom-control-input" required>
                        <label class="custom-control-label" for="customRadioInline3">Kiloan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="satuan" value="lainnya" class="custom-control-input" required>
                        <label class="custom-control-label" for="customRadioInline4">lainnya</label>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">URL Gambar</div>
                    </div>
                        <input type="url" class="form-control" placeholder="URL Gambar (opsional)" name="gambar">
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Stok Awal</div>
                    </div>
                        <input type="number" class="form-control" placeholder="Stok awal" name="stok" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>
    </form>
</body>
</center>
</html>