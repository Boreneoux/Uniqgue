<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>
<!-- disini nempatin isi atau content nya -->
<?= $this->section('content'); ?>

<!-- Trending Item -->
<section id="hero">

    <div class="py-20 bg-[#f3f3f3] w-full flex flex-col text-start justify-center md:flex-row">
        <div class="container mx-auto px-6 md:flex-row">
            <div class="flex flex-col">
                <h2 class="text-4xl font-bold mb-2 text-black ">
                    Trending Item
                </h2>
                <h3 class="text-2xl mb-8 text-black">
                    Best Seller Product in our shop
                </h3>
            </div>
            <div class="flex justify-center flex-col md:flex-row items-center ">
                <?php foreach ($product as $pr) : ?>
                    <!-- <a href="/product/<?= $pr['product_slug']; ?>" class="bg-[#D1BEB0] font-bold rounded py-4 px-8 shadow-lg uppercase tracking-wider w-[208px] h-[200px] mx-2 my-2 md:my-0 hover:bg-slate-200">
                        <?= $pr['product_name']; ?>
                    </a> -->

                    <!-- product image -->
                    <!-- <div class="bg-[#D1BEB0] group-hover:opacity-70 transition">
                        <a href="/product/<?= $pr['product_slug']; ?>">
                            <img src="/img/Product/<?= $pr['product_img'] ?>" alt="<?= $pr['product_name'] ?>" class="object-contain w-[315px] h-[300px]">
                        </a>
                        <div class="relative inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 group-hover:bg-transparent transition">
                        </div>
                    </div> -->
                    <!-- product image end -->

                    <!-- product content -->
                    <!-- <div class="pt-4 pb-3 px-4">
                        <a href="/product/<?= $pr['product_slug']; ?>">
                            <h4 class="uppercase font-medium text-xl mb-2 text-black hover:text-slate-400 transition"><?= $pr['product_name']; ?></h4>
                        </a>
                        <p class="text-lg text-gray-500 font-base"><?= $pr['product_desc']; ?></p>
                        <p class="text-lg text-black font-semibold">IDR <?= number_format($pr['product_price'], 0, ',', '.'); ?></p>
                    </div> -->
                    <!-- product content end -->

                    <!-- Trending Product -->

                    <div class="">
                        <a href="/product/<?= $pr['product_slug']; ?>" class="relative bg-[#D1BEB0] group group-hover:bg-black transition-all ease-in-out w-[208px] h-[220px] mx-2 block mb-4 rounded-xl">
                            <img src="/img/Product/<?= $pr['product_img'] ?>" alt="<?= $pr['product_name'] ?>" class="group-hover:opacity-20">
                            <div class="absolute opacity-0 group-hover:opacity-100 transition-all ease-in-out flex flex-col flex-grow-0 justify-center items-center place-items-center bottom-[30%] w-full">
                                <p class="uppercase font-medium text-xl text-white drop-shadow-lg"><?= $pr['product_name']; ?></p>
                                <p class="text-lg text-white drop-shadow-lg font-semibold">IDR <?= number_format($pr['product_price'], 0, ',', '.'); ?></p>
                                <p class="text-white">Details →</p>
                            </div>
                        </a>


                    </div>
                    <!-- end trending product -->
                <?php endforeach; ?>
            </div>

</section>

<!-- END OF Trending Item -->

<!-- Values -->
<!-- <section id="keunggulan">
    <div class="py-20 flex justify-around">
        <div class="justify-around flex flex-col md:flex-row items-center">
            <div class="container mx-0">
                <img src="/img/Principles/fast-delivery.png" alt="Fast Delivery">
                <h2 class="text-black font-bold text-2xl mb-2 text-center">FAST DELIVERY</h2>
                <p class="text-black text-sm text-center">Using the fastest delivery service in town.</p>
            </div>

            <div class="container mx-0 md:px-28">
                <img src="/img/Principles/best-quality.png" alt="Best Quality">
                <h2 class="text-black font-bold text-2xl mb-2 text-center">BEST QUALITY</h2>
                <p class="text-black text-sm text-center">Our products use the best materials.</p>
            </div>

            <div class="container mx-0">
                <img src="/img/Principles/flexible-payment.png" alt="Flexible Payment" class="mb-0 md:mb-4 ">
                <h2 class="text-black font-bold text-2xl mb-2 text-center">FLEXIBLE PAYMENTS</h2>
                <p class="text-black text-sm text-center">Spread your purchase with 4 easy payments.</p>
            </div>
        </div>
    </div>


</section> -->

<section id="key-values">
    <div class="container md:flex md:justify-around md:mx-auto md:py-20">
        <div class="w-full flex flex-col justify-center items-center mb-8 mx-auto md:flex-row">
            <div class="place-items-center text-center md:pl-4">
                <img src="/img/Principles/fast-delivery.png" alt="Fast Delivery">
                <h2 class="text-black font-bold text-2xl mb-2">FAST DELIVERY</h2>
                <p class="text-black text-sm">Using the fastest delivery service in town.</p>
            </div>

            <div class="place-items-center text-center md:px-[13rem]">
                <img src="/img/Principles/best-quality.png" alt="Best Quality">
                <h2 class="text-black font-bold text-2xl mb-2">BEST QUALITY</h2>
                <p class="text-black text-sm text-center">Our products use the best materials.</p>
            </div>

            <div class="place-items-center text-center md:pr-4">
                <img src="/img/Principles/flexible-payment.png" alt="Flexible Payment" class="">
                <h2 class="text-black font-bold text-2xl mb-2">FLEXIBLE PAYMENTS</h2>
                <p class="text-black text-sm text-center">Spread your purchase with 4 easy payments.</p>
            </div>
        </div>
    </div>

</section>

<!-- END OF Values -->


<!-- Newsletter start -->
<section id="newsletter">
    <div class=" bg-[#f3f3f3] w-full justify-center flex py-12">
        <div class="text-dark font-normal">
            <h1 class="text-2xl">SUBSCRIBE TO OUR NEWSLETTER</h1>
            <h3 class="text-center text-base mb-4">To get our latest promo and more cool stuf</h3>
            <form action="" class="flex mb-4">
                <input type="email" placeholder="Email" class="px-3 py-2 border border-black shadow block text-sm w-full placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700">
                <button class="border border-solid border-black items-center border-l-0 px-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                        <g transform="translate(128 128) scale(0.72 0.72)">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <polygon points="0,14.69 0,39.65 51,45 0,50.35 0,75.31 90,45 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) " />
                            </g>
                        </g>
                    </svg></button>
            </form>
        </div>
    </div>
</section>
<!-- Newsletter end -->
<?= $this->endSection(); ?>