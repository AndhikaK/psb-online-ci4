<!-- success alert -->
<?php if (session()->getFlashData('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashData('success') ?>
    </div>
<?php endif ?>


<!-- gagal alert -->
<?php if (session()->getFlashData('gagal')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashData('gagal') ?>
    </div>
<?php endif ?>