<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <style>
        body {
            padding-left: 10%;
            padding-right: 10%;
            font-size: 1.5rem;
        }

        h2 {
            text-align: center;
        }

        label {
            width: 500px;
        }


        input,
        select {
            border: none;
            outline: none;
            font-size: 1.5rem;
        }
    </style>


</head>

<body>
    <div class="container ">
        <h2 class="mb-4 text-center">Data Calon Siswa</h2>
        <div class="">
            <div class="col-12 grid">
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $data['nisn'] ?>">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input value="<?= $data['nama'] ?>" type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="tempat-lahir" class="form-label">Tempat lahir </label>
                        <input value="<?= $data['tempat-lahir'] ?>" type="text" class="form-control" id="tempat-lahir" name="tempat-lahir">
                    </div>

                    <div class="col-6 mb-3">
                        <label for="ttl" class="form-label">Tanggal, lahir</label>
                        <input value="<?= $data['ttl'] ?>" type="date" class="form-control" id="ttl" name="ttl">
                    </div>
                </div>
            </div>

            <div class="col-12 grid">
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" id="jk" name="jk">
                        <option value="laki-laki" <?= $data['status'] === "laki-laki" ? "selected" : "" ?>>Laki-laki</option>
                        <option value="perempuan" <?= $data['status'] === "perempuan" ? "selected" : "" ?>>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input value="<?= $data['alamat'] ?>" type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status Penerimaan</label>
                    <select class="form-select" aria-label="Default select example" id="status" name="status">
                        <option value="pending" <?= $data['status'] === "pending" ? "selected" : "" ?>>Pending</option>
                        <option value="lulus" <?= $data['status'] === "lulus" ? "selected" : "" ?>>Lulus</option>
                        <option value="gagal" <?= $data['status'] === "gagal" ? "selected" : "" ?>>Gagal</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</body>

</html>