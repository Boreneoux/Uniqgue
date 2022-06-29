<!-- ngeload template web + navbar -->
<?php //if(!session()->get('isLoggedIn')) ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<!-- content -->
<h1>Profile</h1>
<ul>
    <?php foreach($profile as $pr): ?>
        <li><?= $pr['user_img']; ?></li>
        <li><?= $pr['fullname']; ?></li>
        <li><?= $pr['email']; ?></li>
        <li><?= $pr['address']; ?></li>
    <?php endforeach; ?>
</ul>

<?= $this->endSection(); ?>