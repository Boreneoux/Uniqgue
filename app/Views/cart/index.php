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

<section id="cart" class="bg-[#f3f3f3] w-full mt-5 pb-96">
    <div class="flex flex-col">
        <h1 class="text-center mx-auto text-3xl pt-8">YOUR CART</h1>
        <!-- Edit Cart -->
        <?php if (session()->get('cart_edit') == false) : ?>
            <?php $edit = "";
            $editTxtNum = "readonly='readonly'" ?>
            <a href="<?= base_url('/cart/edit'); ?>" class="self-end bg-white hover:bg-gray-100 text-gray-800 mr-6 md:mr-12 py-2 px-4 border border-gray-400 rounded shadow mb-2">Edit Cart</a>
        <?php else : ?>
            <?php $edit = "disabled='disabled'";
            $editTxtNum = ''; ?>
            <!-- <a href="<?php // echo base_url('/cart/save'); 
                            ?>">Save</a> -->
            <a href="<?= base_url('/cart/cancel'); ?>" class="self-end bg-white hover:bg-gray-100 text-gray-800 mr-12 py-2 px-4 border border-gray-400 rounded shadow mb-6">Cancel</a>
        <?php endif; ?>
        <!-- End of Edit Cart -->

        <!-- Products -->
        <div class="">
            <?php if (session()->get('cart_edit') == true) : $destination = 'save'; ?>
                <form action="/cart/save" method="post">
                <?php else : $destination = 'checkout'; ?>
                    <form action="/order" method="post">
                    <?php endif; ?>
                    <?php foreach ($cartItem as $key => $item) : ?>
                        <div class="flex flex-col mt-5">
                            <?php if ($destination == 'save') : ?>
                                <input type="hidden" name="qtyold_<?= $key; ?>" value="<?= (int)$item['qty']; ?>">
                            <?php endif; ?>
                            <div class="flex flex-row mx-2 md:ml-10">
                                <input type="checkbox" name="key_<?= $key; ?>" id="key" <?= $edit; ?> value="<?= (int)$item['qty']; ?>" class="self-start w-5 h-5 my-auto md:mx-8">
                                <img src="/img/Product/<?= $item['product_img']; ?>" alt="<?= $item['product_name']; ?>" class="bg-[#D1BEB0]  w-[138px] h-[145px] mx-2 mb-4 rounded-xl">
                                <div class="my-auto w-full">
                                    <div class="grid grid-cols-2 gap-4 ">
                                        <label for="key" class="text-xl font-bold col-span-1"><?= $item['product_name']; ?></label>
                                        <p class="font-light text-sm md:justify-self-end md:pr-12">Price: IDR <?= number_format($item['price'], 0, ',', '.'); ?></p>
                                    </div>
                                    <h4>Size : <?= $item['size']; ?></h4>
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-1">
                                            <label for="qty_<?= $key; ?>">Quantity : </label>
                                            <input type="number" name="qty_<?= $key; ?>" id="qty_<?= $key; ?>" value="<?= (int)$item['qty']; ?>" class="w-8 text-center border border-gray-400 rounded-md" <?= $editTxtNum; ?>>
                                        </div>

                                        <h2 class="col-span-1 mb-5 md:justify-self-end md:pr-12"> Total : <span class="font-bold"> IDR <?= number_format($item['qty_times_price'], 0, ',', '.'); ?> </span></h2>
                                        <a href="<?= base_url("cart/delete/$key"); ?>" class="col-end-3 justify-self-end md:justify-self-end md:pr-12"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg></a>

                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                        <button type="submit" class="text-gray-900 bg-[#D1BEB0] focus:ring-4 focus:outline-none  font-medium rounded-lg text-lg px-5 py-2.5 text-center mb-2 w-[150px] h-[50px] mx-auto hover:bg-opacity-80 mt-12">
                            <?php if ($destination == 'save') : ?>
                                <?= $destination; ?>
                            <?php else : echo strtoupper($destination);
                            endif; ?>
                            →
                        </button>
                    </form>
        </div>

        <!-- End of products -->

    </div>
</section>


<?= $this->endSection(); ?>