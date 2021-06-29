<?= $this->extend('layout/user-template') ?>

<?= $this->section('content') ?>

<!-- ========================== CONTENT MULAI DARI SINI ======================= -->
<h2 class="mb-4"><?= $title ?></h2>

<!-- jika blom ada nama ato data yang lain -->
<?php if ($data['nama'] === "") : ?>

    <p>Silahkan lakukan pendaftaran di menu pendaftaran. Isikan semua data berdasarkan data pribadi</p>

<?php endif ?>

<!-- jika sudah melakukan pendaftaran -->
<!-- tampilkan status sekarang -->
<!-- pending -->
<?php if ($data['status'] === "pending" || $data['status'] === "") : ?>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
                    <b>Hallo, <?= $data['nama'] ?></b> <span class="badge bg-primary ms-2">Pending</span>
                </button>
            </h2>
            <div id="collapseData" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Pendaftaran kamu sedang dalam proses seleksi, silahkan tunggu sampai pengumuman selanjutnya untuk status pendaftaran ya....
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<!-- lulus -->
<?php if ($data['status'] === "lulus") : ?>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
                    <b>Hallo, <?= $data['nama'] ?></b> <span class="badge bg-success ms-2">Lulus</span>
                </button>
            </h2>
            <div id="collapseData" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Selamat, kamu lulus seleksi!! Silahkan lakukan pengurusan administrasi ke loket sekolah.
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<!-- Gagal -->
<?php if ($data['status'] === "gagal") : ?>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
                    <b>Hallo, <?= $data['nama'] ?></b> <span class="badge bg-danger ms-2">Gagal</span>
                </button>
            </h2>
            <div id="collapseData" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Maaf kamu tidak lulus proses seleksi. Jangan patah semangat dan sampai ketemu di lain kesempatan ya
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<!-- ========================== CONTENT SELESAI DI SINI ======================= -->

<?= $this->endSection() ?>