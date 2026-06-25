<?= $this->include('template/header'); ?>

<article class="entry">

    <h2>
        <?= isset($artikel['judul'])
            ? esc($artikel['judul'])
            : ''; ?>
    </h2>

    <p>
        <?= isset($artikel['isi'])
            ? esc($artikel['isi'])
            : ''; ?>
    </p>

</article>

<?= $this->include('template/footer'); ?>