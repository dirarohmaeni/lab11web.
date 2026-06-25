<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My Website' ?></title>
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
</head>
<body>

<div id="container">

<header>
    <h1>Layout Sederhana</h1>
</header>

<nav>
    <a href="<?= base_url('/'); ?>">Home</a>
    <a href="<?= base_url('/artikel'); ?>">Artikel</a>
    <a href="<?= base_url('/about'); ?>">About</a>
    <a href="<?= base_url('/contact'); ?>">Kontak</a>
</nav>

<section id="wrapper">

<section id="main">
    <?= $this->renderSection('content') ?>
</section>

<aside id="sidebar">

    <div class="widget-box">
        <?= view_cell('App\Cells\ArtikelTerbaru::render') ?>
    </div>

</aside>

</section>

<footer>
    <p>&copy; 2021 - Universitas Pelita Bangsa</p>
</footer>

</div>

</body>
</html>