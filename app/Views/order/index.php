<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->

<div class="w-full bg-[#f3f3f3] mb-8 pt-12 md:flex md:flex-col">
    <h1 class="text-4xl text-center mb-10">CHECKOUT</h1>

    <form action="/order/buy" method='POST'>
        <?php if (isset($validation)) : ?>
            <ul>
                <?= $validation->listErrors(); ?>
            </ul>
        <?php endif; ?>
        <div class="flex flex-wrap">

            <div class="px-8 mb-10 w-full grow md:w-1/2">
                <?php foreach ($orderProceed as $index => $order) : ?>
                    <div class="px-2 grid grid-cols-3 py-2 gap-4 md:gap-24">
                        <input type="hidden" name="key_<?= $order; ?>" id="key_<?= $order; ?>" value="<?= $order; ?>">
                        <?= $purchased[$index]['product_name']; ?>
                        <p class="font-light">
                            x<?= $purchased[$index]['qty']; ?>
                        </p>
                        Total : IDR <?= number_format($purchased[$index]['qty_times_price'], 0, ',', '.'); ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="w-full md:w-1/2">
                <div class="md:ml-auto md:mr-10 mx-auto max-w-md max-h-lg bg-white mb-8 rounded-md px-4 py-8">
                    <h2 class="text-black font-bold text-xl uppercase pb-4">Total Payment</h2>
                    <div class="pb-4 grid grid-cols-2">
                        <p class="font-light">Sub total product </p>
                        <p class="font-light">IDR <?= number_format($total, 0, ',', '.'); ?></p>
                        <p class="font-light">Delivery fee </p>
                        <p class="border-black border-b-2 py-1 font-light">IDR <?= number_format(50000, 0, ',', '.'); ?></p>
                        <p class="font-bold">Total </p>
                        <p class="font-bold">IDR <?= number_format($total += 50000, 0, ',', '.'); ?></p>
                    </div>

                    <h1 class="text-black font-bold text-xl uppercase">Payments method</h1>
                    <div class="pb-8 flex flex-wrap">
                        <?php foreach ($payment as $pym) : ?>
                            <div class="flex grow-0">
                                <input type="radio" name="payment" id="<?= $pym['payment_id']; ?>" value="<?= $pym['payment_id']; ?>" class="mx-1">
                                <label for="<?= $pym['payment_id']; ?>"><img src="/img/Payment/<?= $pym['payment_name']; ?>.png" alt="payment"></label>

                            </div>
                        <?php endforeach ?>
                    </div>
                    <div>
                        <button type="submit" name="submit" class="uppercase border bg-[#D1BEB0] text-center rounded hover:border-black focus:outline-none focus:ring-black active:border-black hover:bg-slate-300 text-xl w-full">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>


<!-- Newsletter start -->
<section id="newsletter">
    <div class=" bg-[#f3f3f3] w-full justify-center flex py-12 mb-8">
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