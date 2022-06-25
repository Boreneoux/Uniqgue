<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<!-- Staff Profile Start -->
<section id="profile">
    <div class="py-20 bg-[#f3f3f3] w-full flex justify-center">
        <div class="container text-center">
            <h1 class="text-black text-2xl font-bold mb-2">ABOUT US</h1>
            <div class="text-left">
                <p class="mx-24 ">
                    Uniqgue is a fashion brand that was founded in 2022, which is based on the need for fashion and prestige of young people to always look handsome and beautiful in front of their friends.
                    <br>
                    This brand has a principle to always maintain appearance, whether it's rain or storm, it's not an excuse to look Unique.
                    <br>
                    We run this brand with all our heart and soul and uphold justice, so that no problem can stop us from moving forward.
                </p>
            </div>
            <div class="">
                <h1 class="text-black font-bold text-2xl">OUR TEAMS</h1>
            </div>
        </div>
    </div>
</section>

<!-- Staff Profile End -->

<!-- Newsletter start -->
<section id="newsletter">
    <div class=" bg-[#f3f3f3] w-full justify-center flex py-12 mt-5">
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