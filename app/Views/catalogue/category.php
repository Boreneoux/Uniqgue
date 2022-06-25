<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->

<ul>
    <?php foreach ($category as $ctg) : ?>
        <li><a href="/catalogue/<?= $ctg['category_slug']; ?>">
                <h2><?= $ctg['category_name']; ?></h2>
            </a></li>
    <?php endforeach; ?>
</ul>
<ul>
    <?php foreach ($product as $prd) : ?>
        <li><a href="/product/<?= $prd['product_slug']; ?>"> <?= $prd['product_name']; ?></a></li>
    <?php endforeach; ?>
</ul>
<?= $this->endSection(); ?>