<!doctype html>

<?php

include 'koneksi.php';

?>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistem Informasi Agenda Kegiatan</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SIAK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Log Out</a>
                        </li>
                </div>
            </div>
        </nav>

        <figure class="text-center mt-5">
            <blockquote class="blockquote">
                <p>SISTEM INFORMASI AGENDA KEGIATAN</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Layanan Agenda Kegiatan <cite title="Source Title">Dinas Kominfo</cite>
            </figcaption>
        </figure>

        <a href="insert.php">
            <button type="button" class="btn btn-primary mb-3">
                <iconify-icon icon="material-symbols:add-box-outline-sharp"></iconify-icon>
                Tambah
            </button>
        </a>

        <table class="table table-hover table-bordered align-middle">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal Kegiatan</th>
                    <th scope="col">Agenda Kegiatan</th>
                    <th scope="col">Penyelenggara OPD</th>
                    <th scope="col">Peserta Hadir</th>
                    <th scope="col">Notulen</th>
                    <th scope="col">Dokumentasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM tb_agenda";
                $sql = mysqli_query($konek, $query);
                $no = 1;
                while ($data = mysqli_fetch_array($sql)) {


                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['agenda']; ?></td>
                        <td><?php echo $data['penyelenggara']; ?></td>
                        <td><?php echo $data['peserta']; ?></td>
                        <td><?php echo $data['notulen']; ?></td>
                        <td><img src="img/<?php echo $data['dokumentasi']; ?>" alt="" style="width: 100px;"></td>
                        <td>
                            <button type="button" class="btn btn-secondary">Edit </button>
                            <a href="hapus.php"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                <?php
                    $no++;
                } ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>