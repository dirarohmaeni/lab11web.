<?= $this->include('template/admin_header'); ?>

<div class="form-container">

    <h2>Edit Artikel</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <p>
            <label>Judul</label>
            <input type="text" name="judul" value="<?= esc($artikel['judul']); ?>" required>
        </p>

        <p>
            <label>Isi Artikel</label>
            <textarea name="isi" rows="10"><?= esc($artikel['isi']); ?></textarea>
        </p>

        <?php if (isset($kategori)) : ?>
        <p>
            <label>Kategori</label>
            <select name="id_kategori" required>
                <?php foreach ($kategori as $k) : ?>
                    <option value="<?= $k['id_kategori']; ?>"
                        <?= ($artikel['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>>
                        <?= esc($k['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        <?php endif; ?>

        <p>
            <label>Gambar</label><br>

            <?php if (!empty($artikel['gambar'])) : ?>
                <img src="<?= base_url('gambar/' . $artikel['gambar']); ?>"
                     width="150"
                     style="margin-bottom:10px;">
            <?php endif; ?>

            <input type="file" name="gambar">
        </p>

        <p>
            <button type="submit" class="btn btn-edit">
                Update Artikel
            </button>
        </p>

    </form>

</div>

<?= $this->include('template/admin_footer'); ?>