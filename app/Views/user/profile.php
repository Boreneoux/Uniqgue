<!-- ngeload template web + navbar -->
<?php //if(!session()->get('isLoggedIn')) 
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<!-- content -->
<section id="MyProfile" class="bg-[#f3f3f3] py-64 w-full mb-12 ">
    <div class="container mx-auto">
        <div class="flex items-center justify-center md:flex flex-col lg:items-center lg:justify-center">
            <?php foreach ($profile as $pr) : ?>
                <div class=" mb-4">
                    <h1 class="text-2xl text-dark font-bold mb-4 text-center">PROFILE</h1>
                </div>
                <div class="w-1/2 md:px-12">
                    <ul>
                        <li class="border-black border-b-2 py-1"><?= $pr['fullname']; ?></li>
                        <li class="border-black border-b-2 py-1"><?= $pr['email']; ?></li>
                        <li class="border-black border-b-2 py-1"><?= $pr['address']; ?></li>
                    </ul>
                </div>
                <!-- <?php // $pr['user_img']; 
                        ?> -->
        </div>
    <?php endforeach; ?>
    </div>
</section>

<?= $this->endSection(); ?>