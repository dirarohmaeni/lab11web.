<?= $this->include('template/admin_header'); ?>

<div class="admin-container">

    <h2>Data Artikel AJAX</h2>

    <table class="admin-table" id="artikelTable">

        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="4" class="center">
                    Loading data...
                </td>
            </tr>
        </tbody>

    </table>

</div>

<script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>

<script>

$(document).ready(function() {

    loadData();

    function loadData() {

        $.ajax({

            url: "<?= base_url('ajax/getData'); ?>",

            method: "GET",

            dataType: "json",

            success: function(data) {

                let html = '';

                $.each(data, function(i, row) {

                    html += `
                        <tr>

                            <td class="center">${row.id}</td>

                            <td>${row.judul}</td>

                            <td class="center">Aktif</td>

                            <td class="center">

                                <a href="<?= base_url('admin/artikel/edit/'); ?>${row.id}"
                                   class="btn">

                                    Ubah

                                </a>

                                <a href="#"
                                   class="btn btn-danger btn-delete"
                                   data-id="${row.id}">

                                    Hapus

                                </a>

                            </td>

                        </tr>
                    `;
                });

                $('#artikelTable tbody').html(html);
            }
        });
    }

    $(document).on('click', '.btn-delete', function(e) {

        e.preventDefault();

        let id = $(this).data('id');

        if (confirm('Yakin hapus artikel?')) {

            $.ajax({

                url: "<?= base_url('ajax/delete/'); ?>" + id,

                method: "DELETE",

                success: function() {

                    loadData();
                }
            });
        }
    });

});

</script>

<?= $this->include('template/admin_footer'); ?>