<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<?php $cartItem = session()->get('cart_item'); ?>
<?php //dd(session()->get('cart_item')); 
?>
<?php if (session()->get('success')) : ?>
    <div>
        <?= session()->get('success'); ?>
    </div>
<?php endif; ?>
<?php if (session()->get('cart_edit') == false) : ?>
    <?php $edit = "";
    $editTxtNum = "readonly='readonly'" ?>
    <a href="<?= base_url('/cart/edit'); ?>">Edit Cart</a>
<?php else : ?>
    <?php $edit = "disabled='disabled'";
    $editTxtNum = ''; ?>
    <!-- <a href="<?php // echo base_url('/cart/save'); 
                    ?>">Save</a> -->
    <a href="<?= base_url('/cart/cancel'); ?>">Cancel</a>
<?php endif; ?>
<?php if (session()->get('cart_edit') == true) : $destination = 'save'; ?>
    <form action="/cart/save" method="post">
    <?php else : $destination = 'checkout'; ?>
        <form action="/order" method="post">
        <?php endif; ?>
        <?php foreach ($cartItem as $key => $item) : ?>
            <div>
                <?php if ($destination == 'save') : ?>
                    <input type="hidden" name="qtyold_<?= $key; ?>" value="<?= (int)$item['qty']; ?>">
                <?php endif; ?>
                <label for="key"><?= $item['product_name']; ?></label>
                <input type="checkbox" name="key_<?= $key; ?>" id="key" <?= $edit; ?> value="<?= (int)$item['qty']; ?>">
                <input type="number" name="qty_<?= $key; ?>" id="qty_<?= $key; ?>" value="<?= (int)$item['qty']; ?>" <?= $editTxtNum; ?>>
                <a href="<?= base_url("cart/delete/$key"); ?>">Delete</a>
            </div>
        <?php endforeach; ?>
        <button type="submit">
            <?php if ($destination == 'save') : ?>
                <?= $destination; ?>
            <?php else : echo $destination;
            endif; ?>
        </button>
        </form>
        <?= $this->endSection(); ?>