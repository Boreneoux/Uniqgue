<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->


<section id="category" class="mt-4 w-full">
    <div class="grid lg:grid-cols-5 items-start w-full">
        <div class="col-span-5 lg:col-span-1 bg-white lg:left-0 lg:w-1/5">
            <ul class="grid grid-flow-col lg:grid-flow-row border-black border-b-2 py-4 lg:flex-col lg:border-0 lg:ml-20 lg:my-auto">
                <h1 class=" hidden lg:block text-2xl mb-8">Categories</h1>
                <?php foreach ($category as $ctg) : ?>
                    <li class="mx-auto text-lg lg:text-xl lg:py-2 hover:text-slate-500"><a href="/catalogue/<?= $ctg['category_slug']; ?>">
                            <?= $ctg['category_name']; ?>
                        </a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-span-5 lg:col-span-4 bg-[#f3f3f3]">
            <h1 class="text-4xl text-center pt-5 pb-8"><?= ($product[0]['category_name']); ?></h1>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
                <?php foreach ($product as $prd) : ?>
                    <!-- single product -->
                    <div href="/product/<?= $prd['product_slug']; ?>" class="bg-[#FDFAFA] shadow rounded overflow-hidden group lg:w-[315px] lg:h-[450px] mx-auto mb-8">
                        <!-- product image -->
                        <div class="bg-[#D1BEB0] group-hover:opacity-70 transition">
                            <a href="/product/<?= $prd['product_slug']; ?>">
                                <img src="/img/Product/<?= $prd['product_img'] ?>" alt="<?= $prd['product_name'] ?>" class="object-contain w-[315px] h-[300px]">
                            </a>
                            <div class="relative inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 group-hover:bg-transparent transition">
                            </div>
                        </div>
                        <!-- product image end -->

                        <!-- product content -->
                        <div class="pt-4 pb-3 px-4">
                            <a href="/product/<?= $prd['product_slug']; ?>">
                                <h4 class="uppercase font-medium text-xl mb-2 text-black hover:text-slate-400 transition"><?= $prd['product_name']; ?></h4>
                            </a>
                            <p class="text-lg text-gray-500 font-base"><?= $prd['product_desc']; ?></p>
                            <p class="text-lg text-black font-semibold">IDR <?= $prd['product_price']; ?></p>
                        </div>
                        <!-- product content end
                        <!-- single product end -->
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <div class="grid lg:grid-cols-4 items-start w-full">


    </div>

</section>

<?= $this->endSection(); ?>