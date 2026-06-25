<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= esc($title); ?></title>
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
</head>
<body>

<div id="container">

<header>
    <h1>Admin Portal Berita</h1>
</header>

<nav>

    <a href="<?= base_url('/'); ?>">Home</a>

    <a href="<?= base_url('/admin'); ?>">Dashboard</a>

    <a href="<?= base_url('/admin/artikel'); ?>">Artikel</a>

    <a href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a>

</nav>

<div style="padding:20px;"></div>