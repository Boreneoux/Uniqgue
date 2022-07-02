<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ini buat load depedencies css dan load tittle -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Oswald -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- MyCSS -->
    <link rel="stylesheet" href="/css/style.css">
    <?php if(isset($tittle)): ?>
    <title><?= $tittle; ?></title>
    <?php endif;?>
</head>

<body>

    <!-- code dibawah ini buat load navbar (dibikin gini biar rapih)-->
    <!-- code dibawah ini untuk render page yang diinginkan -->
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/footer'); ?>



    <!-- nah yang bawah ini jadi footer dan load dependecies js nya-->


    <script src="/js/navbar.js"></script>
</body>

</html>