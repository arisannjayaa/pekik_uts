<?php
    include("../../config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Motor | Rent Bike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h2 class="fw-bold">Update Motor</h2>
            </div>
        </div>
        <hr>
        <form action="<?=base_url("/config/motor/update.php")?>" method="post">
            <?php
                $id    = $_GET['id']; 
                $query = mysqli_query($conn, "SELECT * FROM tb_motor WHERE id_motor = '$id'");
                while ($data = mysqli_fetch_assoc($query)) { ?>
            <div class="row mb-3 visually-hidden">
                <label class="col-2">Id Motor</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="id_motor" value="<?=$data['Id_motor']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">No Plat</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="no_plat" value="<?=$data['No_plat']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Jenis</label>
                <div class="col-4">
                    <select name="jenis" class="form-select">
                        <option value="">Pilih Jenis Motor</option>
                        <option value="Automatic" <?php if($data['Jenis_motor'] == "Automatic") {echo "selected";} ?>>
                            Otomatis</option>
                        <option value="Manual" <?php if($data['Jenis_motor'] == "Manual") {echo "selected";} ?>>
                            Manual</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Warna</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="warna" value="<?=$data['warna']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Tahun Buat</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="tahun" value="<?=$data['Tahun_buat']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-2">Merk</label>
                <div class="col-4">
                    <input type="text" class="form-control" name="merk" value="<?=$data['Merk']?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <a href="<?=base_url("view/motor/index.php")?>"><button type="button"
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