<?php
    include("../../config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Karyawan | Rent Bike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h2 class="fw-bold">Tambah Karyawan</h2>
            </div>
        </div>
        <hr>
        <form action="<?=base_url("/config/karyawan/update.php")?>" method="post">
            <?php
                $id    = $_GET['id']; 
                $query = mysqli_query($conn, "SELECT * FROM tb_karyawan WHERE Id_karyawan = '$id'");
                while ($data = mysqli_fetch_assoc($query)) { ?>
            <div class="row mb-3 visually-hidden">
                <label class="col-2">Id Motor</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="id_karyawan" value="<?=$data['Id_karyawan']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Nama Karyawan</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="nama" value="<?=$data['Nama_karyawan']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Alamat</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="alamat" value="<?=$data['Alamat']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Jenis Kelamin</label>
                <div class="col-4">
                    <select name="jenis" class="form-select">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Pria" <?php if($data['Jenis_kelamin'] == "Pria") {echo "selected";}?>>Pria
                        </option>
                        <option value="Wanita" <?php if($data['Jenis_kelamin'] == "Wanita") {echo "selected";}?>>Wanita
                        </option>
                        <option value="Lainnya" <?php if($data['Jenis_kelamin'] == "Lainnya") {echo "selected";}?>>
                            Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">No Telepon</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="telp" value="<?=$data['No_telpon']?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <a href="<?=base_url("view/karyawan/index.php")?>"><button type="button"
                            class="btn btn-warning">Kembali</button></a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
            <?php
                }
            ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>