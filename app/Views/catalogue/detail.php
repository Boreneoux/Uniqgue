<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->

<section class="bg-[#f3f3f3] pt-14 pb-80 w-full">

    <div class=" flex flex-wrap md:justify-around md:scale-100">
        <img class="bg-[#D1BEB0] rounded mx-auto md:mx-0 md:w-[500px] md:h-[500px]" src="/img/Product/<?= $product[0]['product_img']; ?>" alt="<?= $product[0]['product_name'] ?>">
        <div class="mx-auto mt-5 md:mx-5">
            <h1 class="text-2xl mb-2"><?= $product[0]['product_name']; ?></h1>
            <h2 class="text-xl font-bold mb-4">IDR <?= $product[0]['product_price']; ?></h2>
            <h2 class="text-lg font-thin">Details: <br> <?= $product[0]['product_desc']; ?></h2>


            <div class="mt-5">
                <form action="/cart/add/<?= $product[0]['product_slug']; ?>" method="post">
                    <?php if ($product[0]['product_size'][0] != 'general') : ?>
                        <?php foreach ($product[0]['product_size'] as $size) : ?>
                            <div class=" border active:border-black hover:border-black focus:outline-none focus:ring-black focus:border-black text-center">
                                <input type="radio" name="size" id="size" value="<?= $size; ?>" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                                <label for="size"><?= $size; ?></label>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <input type="hidden" name="size" id="size" value="<?= $product[0]['product_size'][0]; ?>">
                    <?php endif; ?>
                    <div>
                        <br>
                        <label class="text-xl" for="qty">Quantity: </label>
                        <input type="number" name="qty" id="qty" placeholder="enter quantity" class="block mt-2 p-4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 ">
                    </div>
                    <input type="hidden" name="price" id="price" value="<?= $product[0]['product_price']; ?>">
                    <input type="hidden" name="slug" id="slug" value="<?= $product[0]['product_slug']; ?>">
                    <input type="hidden" name="product_name" id="product_name" value="<?= $product[0]['product_name']; ?>">
                    <br>
                    <div class="border bg-[#D1BEB0] text-center rounded hover:border-black focus:outline-none focus:ring-black active:border-black hover:bg-slate-300 text-xl">
                        <button type="submit" name="submit" id="submit"> + ADD TO CART</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>



<?php if (session()->get('validation')) : ?>
    <?php $validation = session()->get('validation'); ?>
    <ul>
        <li><?= $validation->listErrors(); ?></li>
    </ul>
<?php elseif (session()->get('success')) : ?>
    <h3><?= session()->get('success'); ?></h3>
<?php else : ?>
<?php endif; ?>

<?= $this->endSection(); ?>