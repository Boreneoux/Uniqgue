<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<!-- Staff Profile Start -->
<!-- <section id="profile" class="py-20 bg-[#f3f3f3] w-full">
    <div class="flex justify-center container">
        <div class="text-center mx-auto ">
            <h1 class="text-black text-2xl font-bold">ABOUT US</h1>
            <div class="items-center">
                <div class="inline-block text-left">
                    <p class="mt-6">
                        Uniqgue is a fashion brand that was founded in 2022, which is based on the need for fashion and prestige of young people to <br> always look handsome and beautiful in front of their friends.
                    </p>
                    <p class="mt-6">
                        This brand has a principle to always maintain appearance, whether it's rain or storm, it's not an excuse to look Unique.
                    </p>
                    <p class="mt-6">
                        We run this brand with all our heart and soul and uphold justice, so that no problem can stop us from moving forward.
                    </p>
                </div>
            </div>

            <!-- Staffs Photos -->

<!-- <div class="container mx-auto">
                <h1 class="text-black font-bold text-2xl mt-4">OUR TEAMS</h1>
                <div class="">
                    <div class=" flex flex-row items-center justify-center scale-50">
                        <img src="/img/about-us/fajar.png" alt="Dian Fajar" class="rounded-full mx-16">
                        <img src="/img/about-us/zaqiya.png" alt="Zaqiya Arfiani" class="rounded-full mx-16">
                        <img src="/img/about-us/shalbi.png" alt="Shalbi Addandi" class="rounded-full mx-16">
                        <img src="/img/about-us/ichlas.png" alt="Ichlasul Fikri" class="rounded-full mx-16">
                        <img src="/img/about-us/yohanes.png" alt="Yohanes Bagas" class="rounded-full mx-16">
                    </div>
                </div>
            </div>
        </div> -->
<!-- End Staffs Photos -->
<!-- </div>
</section> -->

<section id="about-us" class="py-20 bg-[#f3f3f3] w-full">
    <div class="container flex justify-center flex-col lg:mx-auto">
        <h1 class="text-center text-black text-4xl  ">ABOUT US</h1>
        <div class="text-left inline-block mx-4 lg:px-56">
            <p class="mt-4 text-left font-light  ">Uniqgue is a fashion brand that was founded in 2022, which is based on the need for fashion and prestige of young people to always look handsome and beautiful in front of their friends.</p>
            <p class="mt-4 text-left  font-light">This brand has a principle to always maintain appearance, whether it's rain or storm, it's not an excuse to look Unique.</p>
            <p class="mt-4 text-left font-light">we run this brand with all our heart and soul and uphold justice, so that no problem can stop us from moving forward.</p>
        </div>
        <!-- Staffs Photos -->
        <h1 class="text-black  text-4xl text-center my-8 lg:-mb-12">OUR TEAMS</h1>
        <div class="flex flex-nowrap justify-center flex-row mx-2 lg:scale-50 lg:-pt-50">
            <a href="https://www.instagram.com/dianfajars_/"><img src="/img/about-us/fajar.png" alt="Dian Fajar" class="rounded-full px-2"></a>
            <a href="https://www.instagram.com/nfryqzz/"><img src="/img/about-us/zaqiya.png" alt="Zaqiya Arfiani" class="rounded-full px-2"></a>
            <a href="https://www.instagram.com/shalbiadd/"><img src="/img/about-us/shalbi.png" alt="Shalbi Addandi" class="rounded-full px-2"></a>
            <a href="https://www.instagram.com/ichlasulfikri_/"><img src="/img/about-us/ichlas.png" alt="Ichlasul Fikri" class="rounded-full px-2"></a>
            <a href="https://www.instagram.com/yo.bgs_/"><img src="/img/about-us/yohanes.png" alt="Yohanes Bagas" class="rounded-full px-2"></a>
        </div>
    </div>
    <!-- End Staffs Photos -->
    </div>

</section>


<!-- Staff Profile End -->

<!-- Newsletter start -->
<section id=" newsletter">
    <div class=" bg-[#f3f3f3] w-full justify-center flex py-12 mt-5">
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