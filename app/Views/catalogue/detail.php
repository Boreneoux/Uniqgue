<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<ul>
<h1><?= $product[0]['product_name']; ?></h1>
<?php foreach ($product[0]['product_size'] as $size): ?>
<li><?= $size; ?></li>    
<?php endforeach; ?>
</ul>
<?= $this->endSection(); ?>