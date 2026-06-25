<?= $this->include('template/admin_header'); ?>

<h2>Daftar Artikel</h2>

<table class="admin-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php if ($artikel): foreach ($artikel as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>

            <td>
                <b><?= $row['judul']; ?></b>
                <p><?= substr($row['isi'], 0, 50); ?>...</p>
            </td>

            <td><?= $row['status']; ?></td>

            <td>
                <a class="btn btn-edit" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
                <a class="btn btn-delete"
                   href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>"
                   onclick="return confirm('Yakin hapus?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="4">Belum ada data.</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?>