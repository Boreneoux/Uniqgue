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
<?php if (session()->get('success_tr')) : ?>
    <div>
        <?= session()->get('success_tr'); ?>
    </div>
<?php endif; ?>
<?php if (session()->get('keyEmpty')) : ?>
    <div>
        <?= session()->get('keyEmpty'); ?>
    </div>
<?php endif; ?>

<section id="cart" class="bg-[#f3f3f3] w-full mt-5">
    <div class="flex flex-col">
        <h1 class="text-center mx-auto text-2xl pt-6">YOUR CART</h1>
        <!-- Edit Cart -->
        <?php if (session()->get('cart_edit') == false) : ?>
            <?php $edit = "";
            $editTxtNum = "readonly='readonly'" ?>
            <a href="<?= base_url('/cart/edit'); ?>" class="self-end mr-4 bg-white hover:bg-gray-100 text-gray-800 py-2 px-4 border border-gray-400 rounded shadow">Edit Cart</a>
        <?php else : ?>
            <?php $edit = "disabled='disabled'";
            $editTxtNum = ''; ?>
            <!-- <a href="<?php // echo base_url('/cart/save'); 
                            ?>">Save</a> -->
            <a href="<?= base_url('/cart/cancel'); ?>">Cancel</a>
        <?php endif; ?>
        <!-- End of Edit Cart -->

        <!-- Products -->
        <div>
            <?php if (session()->get('cart_edit') == true) : $destination = 'save'; ?>
                <form action="/cart/save" method="post">
                <?php else : $destination = 'checkout'; ?>
                    <form action="/order" method="post">
                    <?php endif; ?>
                    <?php foreach ($cartItem as $key => $item) : ?>
                        <div class="flex flex-row">
                            <?php if ($destination == 'save') : ?>
                                <input type="hidden" name="qtyold_<?= $key; ?>" value="<?= (int)$item['qty']; ?>">
                            <?php endif; ?>
                            <input type="checkbox" name="key_<?= $key; ?>" id="key" <?= $edit; ?> value="<?= (int)$item['qty']; ?>">
                            <img src="/img/Product/<?= $item['product_img']; ?>" alt="<?= $item['product_name']; ?>" class="bg-[#D1BEB0] group group-hover:bg-black transition-all ease-in-out w-[208px] h-[220px] mx-2 block mb-4 rounded-xl">
                            <div>
                                <label for="key"><?= $item['product_name']; ?></label>
                                <input type="number" name="qty_<?= $key; ?>" id="qty_<?= $key; ?>" value="<?= (int)$item['qty']; ?>" <?= $editTxtNum; ?>>
                                Size : <?= $item['size']; ?>| Price: IDR <?= number_format($item['price'], 0, ',', '.'); ?>| Total : IDR <?= number_format($item['qty_times_price'], 0, ',', '.'); ?>
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
        </div>

        <!-- End of products -->

    </div>
</section>


<?= $this->endSection(); ?>