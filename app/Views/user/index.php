<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<div>
   <h3>Login</h3>
<form action="/user/login" method="post">
   <label for="email"></label>
   <input type="email" name="email" id="email" placeholder="enter email">

   <label for="password"></label>
   <input type="password" name="password" id="password" placeholder="enter password">

   <button type="submit">Login</button>
   <?php if (isset($login)) :?>
   <?php if (isset($validation)) : ?>
      <ul>
         <li><?= $validation->listErrors(); ?></li>
      </ul>
   <?php endif; ?>
   <?php endif; ?>
</form>
</div>

<h3> Register </h3>
<div>
   <?php if (session()->get('success')) : ?>
      <div>
         <?= session()->get('success'); ?>
      </div>
   <?php endif; ?>
   <form action="/user/register" method="post">
      <label for="fullname"></label>
      <input type="text" name="fullname" id="fullname" placeholder="enter fullname">

      <label for="email"></label>
      <input type="email" name="email" id="email" placeholder="enter email">

      <label for="address"></label>
      <input type="text" name="address" id="address" placeholder="enter address">

      <label for="password"></label>
      <input type="password" name="password" id="password" placeholder="enter password">

      <label for="password_confirm"></label>
      <input type="password" name="password_confirm" id="password_confirm" placeholder="confirm password">

      <button type="submit">Register</button>
   </form>
   <?php if (isset($register)) :?>
   <?php if (isset($validation)) : ?>
      <ul>
         <li><?= $validation->listErrors(); ?></li>
      </ul>
   <?php endif; ?>
   <?php endif; ?>
</div>
<?= $this->endSection(); ?>