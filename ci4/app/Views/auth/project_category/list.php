

<hr>
<table id="listLK" class="table table-striped dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th width="15%">Category</th>
            <th width="10%">Action</th>
        </tr>
    </thead>


    <tbody>
        <?php $nomor = 0;
        foreach ($list as $data) :
            $nomor++; ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><h6><b><?= esc($data['pro_cat_name']) ?></b></h6> </td>
                <td>
                    <button type="button" class="btn btn-primary mb-2" onclick="edit('<?= $data['pro_cat_id'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger mb-2" onclick="hapus('<?= $data['pro_cat_id'] ?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#listcategory').DataTable();

        // $('textarea#LK_isi').summernote({
        //     height: 250,
        //     minHeight: null,
        //     maxHeight: null,
        //     focus: true
        // });
    });

    function edit(pro_cat_id) {
        $.ajax({
            type: "post",
            url: "<?= site_url('project/category_formedit') ?>",
            data: {
                pro_cat_id: pro_cat_id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaledit').modal('show');
                }
            }
        });
    }

    function hapus(pro_cat_id) {
        Swal.fire({
            title: 'Hapus data?',
            text: `Apakah anda yakin menghapus data?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= site_url('project/category_hapus') ?>",
                    type: "post",
                    dataType: "json",
                    data: {
                        pro_cat_id: pro_cat_id
                    },
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.sukses,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            listcategory();
                        }
                    }
                });
            }
        })
    }
</script>