<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<ul>
    <h1><?= $product[0]['product_name']; ?></h1>
    <h2><?= $product[0]['product_price']; ?></h2>
    <h2><?= $product[0]['product_desc']; ?></h2>
    <img src="<?= $product[0]['product_img']; ?>" alt="not found">
</ul>

<form action="/cart/add/<?= $product[0]['product_slug']; ?>" method="post">
<?php //dd($product[0]['product_size']); ?>
    <?php if($product[0]['product_size'][0]!='general') :?>
    <?php foreach ($product[0]['product_size'] as $size) : ?>
        <div>
            <input type="radio" name="size" id="size" value="<?= $size; ?>">
            <label for="size"><?= $size; ?></label>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
        <input type="hidden" name="size" id="size" value="<?= $product[0]['product_size'][0]; ?>">
    <?php endif; ?>
    <div>
        <br>
        <label for="qty"></label>
        <input type="number" name="qty" id="qty" placeholder="enter quantity">
    </div>
    <input type="hidden" name="price" id="price" value="<?= $product[0]['product_price']; ?>">
    <input type="hidden" name="slug" id="slug" value="<?= $product[0]['product_slug']; ?>">
    <input type="hidden" name="product_name" id="product_name" value="<?= $product[0]['product_name']; ?>">
    <br>
    <div>
        <button type="submit" name="submit" id="submit">ADD TO CART</button>
    </div>
</form>
<?php if (session()->get('validation')) : ?>
    <?php $validation = session()->get('validation'); ?>
      <ul>
         <li><?= $validation->listErrors(); ?></li>
      </ul>
      <?php elseif (session()->get('success')) : ?>
      <h3><?= session()->get('success'); ?></h3>
    <?php else: ?>
   <?php endif; ?>

<?= $this->endSection(); ?>