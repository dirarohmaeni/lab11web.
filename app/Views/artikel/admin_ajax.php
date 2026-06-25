<?= $this->include('template/admin_header'); ?>

<div class="admin-container">

    <h2><?= esc($title); ?></h2>

    <form action="<?= current_url(); ?>" method="get" class="form-search">

        <input
            type="text"
            name="q"
            value="<?= esc($q ?? ''); ?>"
            placeholder="Cari judul artikel">

        <select name="kategori_id">

            <option value="">Semua Kategori</option>

            <?php foreach ($kategori as $k) : ?>

                <option value="<?= $k['id_kategori']; ?>"
                    <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>

                    <?= esc($k['nama_kategori']); ?>

                </option>

            <?php endforeach; ?>

        </select>

        <button type="submit" class="btn btn-primary">
            Cari
        </button>

    </form>

    <br>

    <table class="admin-table">

        <thead>

            <tr>

                <th width="60">ID</th>
                <th>Judul</th>
                <th width="170">Kategori</th>
                <th width="90">Status</th>
                <th width="170">Aksi</th>

            </tr>

        </thead>

        <tbody>

        <?php if (!empty($artikel)) : ?>

            <?php foreach ($artikel as $row) : ?>

                <tr>

                    <td class="center">
                        <?= $row['id']; ?>
                    </td>

                    <td>

                        <strong><?= esc($row['judul']); ?></strong>

                        <p class="desc">

                            <?= substr(strip_tags($row['isi']), 0, 80); ?>...

                        </p>

                    </td>

                    <td class="center">

                        <?= esc($row['nama_kategori']); ?>

                    </td>

                    <td class="center">

                        <?= $row['status']; ?>

                    </td>

                    <td class="center">

                        <a
                            href="<?= base_url('admin/artikel/edit/'.$row['id']); ?>"
                            class="btn">

                            Ubah

                        </a>

                        <a
                            href="<?= base_url('admin/artikel/delete/'.$row['id']); ?>"
                            class="btn btn-danger"
                            onclick="return confirm('Yakin ingin menghapus data?')">

                            Hapus

                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        <?php else : ?>

            <tr>

                <td colspan="5" class="center">

                    Tidak ada data artikel.

                </td>

            </tr>

        <?php endif; ?>

        </tbody>

    </table>

    <br>

    <?php if (isset($pager)) : ?>

        <div class="pagination">

            <?= $pager->only(['q','kategori_id'])->links(); ?>

        </div>

    <?php endif; ?>

</div>

<?= $this->include('template/admin_footer'); ?>