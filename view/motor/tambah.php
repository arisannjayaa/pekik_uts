<?php
    include("../../config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Motor | Rent Bike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h2 class="fw-bold">Tambah Motor</h2>
            </div>
        </div>
        <hr>
        <form action="<?=base_url("")?>" method="post">
            <div class="row mb-3">
                <label class="col-2">No Plat</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Jenis</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Warna</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Tahun Buat</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Merk</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <a href="<?=base_url("view/motor/index.php")?>"><button type="submit"
                            class="btn btn-warning">Kembali</button></a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>