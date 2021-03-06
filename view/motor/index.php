<?php
    include("../../config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Motor | Rent Bike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Rent Bike</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="<?=base_url("/view/customer/index.php")?>">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="<?=base_url("/view/karyawan/index.php")?>">Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="<?=base_url("/view/motor/index.php")?>">Motor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold">Daftar Motor</h2>
                <a href="<?=base_url("view/motor/tambah.php")?>"><button class="btn btn-primary">Tambah</button></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>No Plat</th>
                        <th>Jenis</th>
                        <th>Tahun Buat</th>
                        <th>Warna</th>
                        <th>Merk</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                        $no = 1;
                        $query = mysqli_query($conn, "SELECT * FROM tb_motor");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data['No_plat']?></td>
                        <td><?=$data['Jenis_motor']?></td>
                        <td><?=$data['Tahun_buat']?></td>
                        <td><?=$data['warna']?></td>
                        <td><?=$data['Merk']?></td>
                        <td>
                            <a href="<?=base_url("view/motor/update.php?id=".$data['Id_motor'])?>"><button
                                    class="btn btn-warning">Edit</button></a>
                            <a href="<?=base_url("config/motor/delete.php?id=".$data['Id_motor'])?>"><button
                                    class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>