<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>
<div class="d-flex" style="justify-content: space-between;">
    <h2 class="mb-4"><?= $title ?></h2>
    <div></div>
    <div>
        <a href="<?= base_url("/pdfcontroller/printpdf/" . $data['id']) ?>" class="btn btn-success">Print</a>
    </div>
</div>

<form action="<?= base_url('admincontrollers/updatedata') ?>" method="POST" class="row">

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

        <?php if ($data['foto'] != '') : ?>
            <img src="/foto/<?= $data['foto'] ?>" alt="" height="200" width="auto">
        <?php endif ?>
    </div>

    <div class="col-6">

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
        <div class="row">
            <div class="mb-3 col-6">
                <label for="nilai-matematika" class="form-label">Nilai Matematika</label>
                <input value="<?= $data['nilai-matematika'] ?>" type="text" class="form-control" id="nilai-matematika" name="nilai-matematika">
            </div>
            <div class="mb-3 col-6">
                <label for="nilai-inggriss" class="form-label">Nilai Bahasa Inggris</label>
                <input value="<?= $data['nilai-inggriss'] ?>" type="text" class="form-control" id="nilai-inggriss" name="nilai-inggriss">
            </div>
        </div>

    </div>

    <div class="col-12">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>

</form>


<?= $this->endSection() ?>