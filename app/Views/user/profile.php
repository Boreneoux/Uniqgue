<!-- ngeload template web + navbar -->
<?php //if(!session()->get('isLoggedIn')) 
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<!-- content -->
<section id="MyProfile" class="bg-[#f3f3f3] py-48 w-full mb-8 ">
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center md:flex md:flex-row lg:items-center lg:justify-center">
            <?php foreach ($profile as $pr) : ?>
                <div class=" mb-4">
                    <h1 class="text-2xl text-dark font-bold mb-4 text-center">PROFILE</h1>
                    <div class="bg-[#D1BEB0] aspect-w-3 aspect-h-2 rounded-full"><img src="/img/about-us/fajar.png" alt="Dian Fajar" class="rounded-full"></div>
                </div>
                <div class="w-1/2 md:px-12">
                    <ul>
                        <li class="border-black border-b-2 py-1"><?= $pr['fullname']; ?></li>
                        <li class="border-black border-b-2 py-1"><?= $pr['email']; ?></li>
                        <li class="border-black border-b-2 py-1"><?= $pr['address']; ?></li>
                    </ul>
                </div>
                <!-- <?= $pr['user_img']; ?> -->
        </div>
    <?php endforeach; ?>
    </div>
</section>

<?= $this->endSection(); ?>