<?= $this->extend('layout/user-template') ?>

<?= $this->section('content') ?>
<div class="alert alert-warning" role="alert">
    Data akan terkunci jika nilai matematika dan bahasa inggriss sudah terisi/sudah terverifikasi oleh admin
</div>
<div class="d-flex" style="justify-content: space-between;">



    <h2 class="mb-4"><?= $title ?></h2>
    <div></div>
    <div>
        <a href="<?= base_url("/pdfcontroller/printpdf/" . $data['id']) ?>" class="btn btn-success">Print</a>
    </div>
</div>

<form action="<?= base_url('/usercontroller/daftarSekolah') ?>" method="POST" class="row" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <input type="text" name="id" value="<?= $data['id'] ?>" hidden>

    <!-- first column -->
    <div class="col-6">
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

        <div class="form-group">
            <label for="foto">Upload foto</label>
            <input type="file" name="foto" class="form-control-file" id="foto">
        </div>
    </div>

    <div class="col-6">

        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" id="jk" name="jk">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input value="<?= $data['alamat'] ?>" type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label for="nilai-matematika" class="form-label">Nilai Matematika</label>
            <input value="<?= $data['nilai-matematika'] ?>" type="text" class="form-control" id="nilai-matematika" name="nilai-matematika">
        </div>
        <div class="mb-3">
            <label for="nilai-inggriss" class="form-label">Nilai Bahasa Inggris</label>
            <input value="<?= $data['nilai-inggriss'] ?>" type="text" class="form-control" id="nilai-inggriss" name="nilai-inggriss">
        </div>
    </div>
    <img src="/foto/" .$data['foto'] alt="">


    <div class="col-12">
        <?php $submitDisabled = false ?>
        <?php if (($data['nilai-inggriss'] != 0 && $data['nilai-matematika'] != 0) || $data['status'] != "pending") : ?>
            <?php $submitDisabled = true ?>
        <?php endif ?>
        <button type="submit" name="submit" class="btn btn-primary" <?= $submitDisabled ? "disabled" : "" ?>>Submit</button>
    </div>

</form>

<?= $this->endSection() ?>