<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<h1>catalogue/index</h1>
<ul>
   <?php foreach ($category as $ctg) : ?>
      <li>
         <a href="/catalogue/<?= $ctg['category_slug']; ?>">
            <h2><?= $ctg['category_name']; ?></h2>
         </a>
         <?php foreach ($product as $prd) : ?>
            <?php if ($prd['category_name'] == $ctg['category_name']) : ?>
      <li> <?= $prd['product_name']; ?></li>
   <?php endif; ?>
<?php endforeach; ?>
</li>

<?php endforeach; ?>
</ul>
<?= $this->endSection(); ?>