<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>

<h2 class="mb-4"><?= $title ?></h2>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Status</th>
        <th>Aksi</th>
        <th>User</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($data as $row) : ?>

        <tr>
            <td><?= $i++ ?></td>
            <td>
                <!-- display badge berdasarkan status -->
                <?php if ($row['status'] === "pending") : ?>
                    <span class="badge fs-6 bg-primary"><?= $row['status'] ?></span>
                <?php endif ?>
                <?php if ($row['status'] === "lulus") : ?>
                    <span class="badge fs-6 bg-success"><?= $row['status'] ?></span>
                <?php endif ?>
                <?php if ($row['status'] === "gagal") : ?>
                    <span class="badge fs-6 bg-danger"><?= $row['status'] ?></span>
                <?php endif ?>
            </td>
            <td>
                <div class="col-12" class="aksi-table">

                    <?php $id = $row['id'] ?>
                    <a href="<?= base_url("/admin/detail/$id") ?>">
                        <span class="material-icons">edit</span>
                    </a>
                    <a href="<?= base_url('admin/delete/' . $id) ?>">
                        <span class="material-icons text-danger">delete</span>
                    </a>
                </div>
            </td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['nisn'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['jk'] ?></td>
            <td><?= $row['tempat-lahir'] ?></td>
            <td><?= $row['ttl'] ?></td>
        </tr>
    <?php endforeach ?>
</table>

<?= $this->endSection() ?>