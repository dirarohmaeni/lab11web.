```php
<?= $this->include('template/admin_header'); ?>

<div class="admin-container">

    <form action="<?= current_url(); ?>" method="get" class="form-search">

        <input type="text"
               name="q"
               value="<?= esc($q ?? ''); ?>"
               placeholder="Cari judul artikel...">

        <select name="kategori_id">
            <option value="">Semua Kategori</option>

            <?php if (!empty($kategori)) : ?>
                <?php foreach ($kategori as $k) : ?>
                    <option value="<?= esc($k['id_kategori']); ?>"
                        <?= (($kategori_id ?? '') == $k['id_kategori']) ? 'selected' : ''; ?>>
                        <?= esc($k['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>

        <button type="submit" class="btn btn-primary">
            Cari
        </button>

    </form>

    <table class="admin-table">

        <thead>
            <tr>
                <th width="60">ID</th>
                <th>Judul</th>
                <th width="170">Kategori</th>
                <th width="120">Status</th>
                <th width="170">Aksi</th>
            </tr>
        </thead>

        <tbody>

        <?php if (!empty($artikel)) : ?>

            <?php foreach ($artikel as $row) : ?>

                <tr>

                    <td class="center">
                        <?= esc($row['id']); ?>
                    </td>

                    <td>
                        <strong><?= esc($row['judul']); ?></strong>

                        <p class="desc">
                            <?= character_limiter(strip_tags($row['isi']), 80); ?>
                        </p>
                    </td>

                    <td class="center">
                        <?= esc($row['nama_kategori'] ?? '-'); ?>
                    </td>

                    <td class="center">
                        <?= esc($row['status'] ?? '0'); ?>
                    </td>

                    <td class="center">

                        <a href="<?= base_url('admin/artikel/edit/'.$row['id']); ?>"
                           class="btn">
                            Ubah
                        </a>

                        <a href="<?= base_url('admin/artikel/delete/'.$row['id']); ?>"
                           class="btn btn-danger"
                           onclick="return confirm('Yakin ingin menghapus artikel ini?');">
                            Hapus
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        <?php else : ?>

            <tr>
                <td colspan="5" class="center">
                    Belum ada data artikel.
                </td>
            </tr>

        <?php endif; ?>

        </tbody>

    </table>

    <?php if (isset($pager)) : ?>

        <div class="pagination">
            <?= $pager->only(['q', 'kategori_id'])->links(); ?>
        </div>

    <?php endif; ?>

</div>

<?= $this->include('template/admin_footer'); ?>
```
