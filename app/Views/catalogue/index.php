<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->

<!-- product wrapper -->
<div class="bg-[#F3F3F3]">
   <?php foreach ($category as $ctg) : ?>
      <div class="pt-8 pb-6">
         <h2 class="lg:ml-6 md:ml-4 ml-2 text-4xl font-medium text-black uppercase mb-6"><?= $ctg['category_name']; ?></h2>
         <a href="/catalogue/<?= $ctg['category_slug']; ?>" class="right-5 lg:right-20 absolute text-2xl hover:text-slate-500">More Stuff...</a>
      </div>

      <!-- product grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center">
         <?php foreach ($product as $prd) : ?>
            <?php if ($prd['category_name'] == $ctg['category_name']) : ?>

               <!-- single product -->
               <div class="bg-white shadow rounded overflow-hidden group md:w-[315px] md:h-[485px] scale-90">
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
                     <p class="text-lg text-black font-semibold">IDR <?=number_format($prd['product_price'],0,',','.') ; ?></p>
                  </div>
                  <!-- product content end
               <!-- single product end -->
               </div>
            <?php endif; ?>
         <?php endforeach; ?>
         <!-- product grid end-->
      </div>
   <?php endforeach; ?>
   <!-- product wrapper end-->

   <?= $this->endSection(); ?>