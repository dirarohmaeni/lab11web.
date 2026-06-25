<?= $this->include('template/admin_header'); ?>

<div class="form-container">

    <h2>Tambah Artikel</h2>

    <form action=""
          method="post"
          enctype="multipart/form-data">

        <p>
            <label>Judul</label>

            <input type="text"
                   name="judul"
                   required>
        </p>

        <p>
            <label>Isi Artikel</label>

            <textarea name="isi"
                      rows="10"></textarea>
        </p>

        <p>

            <select name="id_kategori" required>

                <option value="">
                    Pilih Kategori
                </option>

                <?php $kategori = $kategori ?? []; ?>

                <?php foreach ($kategori as $k) : ?>

                    <option value="<?= $k['id_kategori']; ?>">

                        <?= isset($k['nama_kategori'])
                            ? esc($k['nama_kategori'])
                            : ''; ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </p>

        <!-- UPLOAD GAMBAR -->
        <p>
            <input type="file" name="gambar">
        </p>

        <p>
            <button type="submit"
                    class="btn btn-edit">

                Simpan

            </button>
        </p>

    </form>

</div>

<?= $this->include('template/admin_footer'); ?>