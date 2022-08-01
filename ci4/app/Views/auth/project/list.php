<?= form_open('project/hapusall', ['class' => 'formhapus']) ?>

<button type="submit" class="btn btn-danger">
    <i class="fa fa-trash"></i> Hapus yang diceklist
</button>

<hr>
<table id="listproject" class="table table-striped dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th width="5%">
                <input type="checkbox" id="centangSemua">
            </th>
            <th width="5%">#</th>
            <th width="15%">Name</th>
            <th width="15%">Category</th>
            <th width="8%">Order</th>
            <th width="8%">Roles</th>
            <th width="8%">Times</th>
            <th width="15%">Cover</th>
            <th width="8%">Action</th>
        </tr>
    </thead>


    <tbody>
        <?php $nomor = 0;
        foreach ($list as $data) :
            $nomor++; ?>
            <tr>
                <td>
                    <input type="checkbox" name="project_id[]" class="centangprojectid" value="<?= $data['project_id'] ?>">
                </td>
                <td><?= $nomor ?></td>
                <td><h6><b><?= $data['project_name'] ?></b></h6> </td>
                <td><?= $data['pro_cat_name'] ?></td>
                <td><?= $data['project_order'] ?></td>
                <td><?= $data['project_roles'] ?></td>
                <td><?= $data['project_time'] ?></td>
                <td class="text-center">
                    <img onclick="gambar('<?= $data['project_id'] ?>')" src="<?= base_url('img/project/' . $data['project_cover']) ?>" width="120px" class="img-thumbnail">
                </td>
                <td>
                    <button type="button" class="btn btn-primary mb-2" onclick="edit('<?= $data['project_id'] ?>')">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger mb-2" onclick="hapus('<?= $data['project_id'] ?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?= form_close() ?>
<script>
    $(document).ready(function() {
        $('#listproject').DataTable();

        // $('textarea#layanan_isi').summernote({
        //     height: 250,
        //     minHeight: null,
        //     maxHeight: null,
        //     focus: true
        // });

        $('#centangSemua').click(function(e) {
            if ($(this).is(':checked')) {
                $('.centangprojectid').prop('checked', true);
            } else {
                $('.centangprojectid').prop('checked', false);
            }
        });

        $('.formhapus').submit(function(e) {
            e.preventDefault();
            let jmldata = $('.centangprojectid:checked');
            if (jmldata.length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ooops!',
                    text: 'Silahkan pilih data!',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else {
                Swal.fire({
                    title: 'Hapus data',
                    text: `Apakah anda yakin ingin menghapus sebanyak ${jmldata.length} data?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Tetap Hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "post",
                            url: $(this).attr('action'),
                            data: $(this).serialize(),
                            dataType: "json",
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: 'Data Berhasil Dihapus!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                listproject();
                            }
                        });
                    }
                })
            }
        });
    });

    function edit(project_id) {
        $.ajax({
            type: "post",
            url: "<?= site_url('layanan/formedit') ?>",
            data: {
                project_id: project_id
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

    function hapus(project_id) {
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
                    url: "<?= site_url('project/hapus') ?>",
                    type: "post",
                    dataType: "json",
                    data: {
                        project_id: project_id
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
                            listproject();
                        }
                    }
                });
            }
        })
    }
</script>