<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>
<!-- disini nempatin isi atau content nya -->
<?= $this->section('content'); ?>

<!-- Trending Item -->
<section id="hero">

    <div class="py-20 bg-[#f3f3f3] w-full flex flex-col text-start justify-center md:flex-row">
        <div class="container mx-auto px-6 md:flex-row">
            <div class="relative lg:mx-48 md:mx-0">
                <h2 class="text-4xl font-bold mb-2 text-black ">
                    Trending Item
                </h2>
                <h3 class="text-2xl mb-8 text-black">
                    Best Seller Product in our shop
                </h3>
            </div>
            <div class="flex justify-center flex-col md:flex-row items-center ">
                <button class="bg-[#D1BEB0] font-bold rounded py-4 px-8 shadow-lg uppercase tracking-wider w-[208px] h-[200px] mx-2 my-2 md:my-0 hover:bg-slate-200">
                    Pre Order 1
                </button>

                <button class="bg-[#D1BEB0] font-bold rounded py-4 px-8 shadow-lg uppercase tracking-wider w-[208px] h-[200px] mx-2 my-2 md:my-0 hover:bg-slate-200">
                    Pre Order 2
                </button>

                <button class="bg-[#D1BEB0] font-bold rounded py-4 px-8 shadow-lg uppercase tracking-wider w-[208px] h-[200px] mx-2 my-2 md:my-0 hover:bg-slate-200">
                    Pre Order 3
                </button>

                <button class="bg-[#D1BEB0] font-bold rounded py-4 px-8 shadow-lg uppercase tracking-wider w-[208px] h-[200px] mx-2 my-2 md:my-0 hover:bg-slate-200">
                    Pre Order 4
                </button>

                <button class="bg-[#D1BEB0] font-bold rounded py-4 px-8 shadow-lg uppercase tracking-wider w-[208px] h-[200px] mx-2 my-2 md:my-0 hover:bg-slate-200">
                    Pre Order 5
                </button>
            </div>
            <!-- <div class="flex flex-col md:flex-row mt-11 justify-center">
                <div class="max-w-sm bg-[#D1BEB0] rounded-lg border border-gray-200 shadow-md dark:bg-[#D1BEB0] hover:bg-slate-200 mx-2">
                    <a href="#">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Image here</h5>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-[#D1BEB0] rounded-lg border border-gray-200 shadow-md dark:bg-[#D1BEB0] hover:bg-slate-200 mx-2">
                    <a href="#">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Image here</h5>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-[#D1BEB0] rounded-lg border border-gray-200 shadow-md dark:bg-[#D1BEB0] hover:bg-slate-200 mx-2">
                    <a href="#">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Image here</h5>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-[#D1BEB0] rounded-lg border border-gray-200 shadow-md dark:bg-[#D1BEB0] hover:bg-slate-200 mx-2">
                    <a href="#">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Image here</h5>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-[#D1BEB0] rounded-lg border border-gray-200 shadow-md dark:bg-[#D1BEB0] hover:bg-slate-200 mx-2">
                    <a href="#">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Image here</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</section>

<!-- END OF Trending Item -->

<!-- Values -->
<section id="keunggulan">
    <div class="py-20 flex justify-around">
        <div class="justify-around flex flex-col md:flex-row items-center">
            <div class="container mx-0 md:mx-32">
                <img src="/img/Principles/fast-delivery.png" alt="Fast Delivery">
                <h2 class="text-black font-bold text-2xl mb-2 text-center">FAST DELIVERY</h2>
                <p class="text-black text-sm text-center">Using the fastest delivery service in town.</p>
            </div>

            <div class="container mx-0 md:mx-32">
                <img src="/img/Principles/best-quality.png" alt="Best Quality">
                <h2 class="text-black font-bold text-2xl mb-2 text-center">BEST QUALITY</h2>
                <p class="text-black text-sm text-center">Our products use the best materials.</p>
            </div>

            <div class="container mx-0 md:mx-32">
                <img src="/img/Principles/flexible-payment.png" alt="Flexible Payment" class="mb-0 md:mb-4 ">
                <h2 class="text-black font-bold text-2xl mb-2 text-center">FLEXIBLE PAYMENTS</h2>
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
                <input type="email" placeholder="Email" class="px-3 py-2 border border-black shadow block text-sm w-full placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500">
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