<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data</title>
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

        <div class="card mt-4">
            <div class="card-header text-center">
                Tambahkan Data
            </div>
            <form action="prosestambah.php" method="post">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="tglkegiatan" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tglkegiatan" name="tglkegiatan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="agenda" class="col-sm-2 col-form-label">Agenda Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="agenda" name="agenda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="penyelenggara" class="col-sm-2 col-form-label">Penyelenggara OPD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="peserta" class="col-sm-2 col-form-label">Peserta Hadir</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="peserta" name="peserta">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="notulen" class="col-sm-2 col-form-label">Notulen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="notulen" name="notulen">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="dokumentasi" class="col-sm-2 col-form-label">Dokumentasi</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="dokumentasi" name="dokumentasi">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary col-sm-12" name="btnTambah">Tambahkan</button>
                    </div>
                </div>
            </form>
        </div>

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>