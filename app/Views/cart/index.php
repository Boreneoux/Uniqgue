<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<section id="cart" class="bg-[#f3f3f3] w-full mt-5 pb-96">
    <?php $cartItem = session()->get('cart_item'); ?>
    <?php //dd(session()->get('cart_item')); 
    ?>
    <?php if (session()->get('success')) : ?>

        <!-- <div class="flex p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium"><?= session()->get('success'); ?></span> Please checkout to continue.
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div> -->
        <div id="alert" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">
                <span class="font-medium"><?= session()->get('success'); ?></span> Please checkout to continue.
            </div>
        </div>

    <?php endif; ?>
    <?php if (session()->get('success_tr')) : ?>
        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium"><?= session()->get('success_tr'); ?></span> Thanks for choosing us.
            </div>
        </div>

    <?php endif; ?>
    <?php if (session()->get('keyEmpty')) : ?>
        <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium"><?= session()->get('keyEmpty'); ?></span>
            </div>
        </div>


    <?php endif; ?>

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