<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->


<section id="login-regist" class="pt-28 bg-[#f3f3f3] w-full pb-12 lg:pb-64">
   <div class="container mx-auto">
      <div class="flex flex-wrap ">
         <div class="w-full px-4 mb-10 lg:w-1/2 ">
            <h2 class="mb-8 text-center text-2xl lg:text-4xl">LOGIN</h2>
            <form action="/user/login" method="post" class="flex flex-col">
               <input type="email" name="email" id="email" class="mb-5 bg-transparent border-black border-b-2" placeholder="enter email" required value="<?= (old('email'))&&session()->has('login')?(old('email')):''; ?>">
               <input type="password" name="password" id="password" class="mb-5 bg-transparent border-black border-b-2" placeholder="enter password" required>
               <button type="submit" class="mt-5 px-4 py-2 rounded bg-[#D1BEB0] hover:bg-opacity-80 text-black font-semibold text-center focus:outline-none focus:ring focus:ring-offset-2 focus:ring-[#D1BEB0] focus:ring-opacity-80 cursor-pointer">LOGIN</button>
               <?php if (session()->has('login')) : ?>
                  <?php if (session()->has('validation')) : $validation=session()->get('validation');?>
                     <ul>
                        <li><?= $validation->listErrors(); ?></li>
                     </ul>
                  <?php endif; ?>
               <?php endif; ?>
            </form>
         </div>
         <div class="w-full px-4 mt-20 lg:w-1/2 lg:mt-0 lg:border-black lg:border-l-2">
            <h2 class="text-center text-2xl mb-8 lg:text-4xl">REGISTER</h2>
            <div class="">
               <?php if (session()->has('success')) : ?>
                  <div>
                     <?= session()->get('success'); ?>
                  </div>
               <?php endif; ?>
               <form action="/user/register" method="post" class="flex flex-col">

                  <input type="text" name="fullname" id="fullname" class="mb-5 bg-transparent border-black border-b-2" placeholder="enter fullname" required value="<?= (old('fullname'))&&session()->has('register')?(old('fullname')):''; ?>">


                  <input type="email" name="email" id="email" class="mb-5 bg-transparent border-black border-b-2" placeholder="enter email" required value="<?= (old('email'))&&session()->has('register')?(old('email')):''; ?>">


                  <input type="text" name="address" id="address" class="mb-5 bg-transparent border-black border-b-2" placeholder="enter address" required value="<?= (old('address'))&&session()->has('register')?(old('address')):''; ?>">


                  <input type="password" name="password" id="password" class="mb-5 bg-transparent border-black border-b-2" placeholder="enter password" minlength="8" required>


                  <input type="password" name="password_confirm" id="password_confirm" class="mb-5 bg-transparent border-black border-b-2" placeholder="confirm password" minlength="8" required>

                  <button type="submit" class="mt-5 px-4 py-2 rounded bg-[#D1BEB0] hover:bg-opacity-80 text-black font-semibold text-center focus:outline-none focus:ring focus:ring-offset-2 focus:ring-[#D1BEB0] focus:ring-opacity-80 cursor-pointer">REGISTER</button>
               </form>
               <?php if (session()->has('register')) : ?>
                  <?php if (session()->has('validation')) : $validation=session()->get('validation');?>
                     <ul>
                        <li><?= $validation->listErrors(); ?></li>
                     </ul>
                  <?php endif; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>

</section>

<?= $this->endSection(); ?>