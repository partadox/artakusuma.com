<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('project/simpan', ['class' => 'formtambah']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">

                <div class="form-group">
                    <label>Project Name </label>
                    <input type="text" class="form-control" id="project_name" name="project_name">
                    <div class="invalid-feedback error_project_name">
                    </div>
                </div>

                <div class="form-group">
                    <label>Project Category </label>
                    <select name="project_category" id="project_category" class="form-control">
                        <option value="" disabled selected>--Choose--</option>
                        <?php foreach ($list_category as $key => $data) { ?>
                            <option value="<?= $data['pro_cat_id'] ?>"><?= $data['pro_cat_name'] ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback error_project_category">
                    </div>
                </div>

                <div class="form-group">
                    <label>Project Order </label>
                    <input type="number" class="form-control" id="project_order" name="project_order">
                    <div class="invalid-feedback error_project_order">
                    </div>
                </div>

                <div class="form-group">
                    <label>Project Roles </label>
                    <input type="text" class="form-control" id="project_roles" name="project_roles">
                    <div class="invalid-feedback error_project_roles">
                    </div>
                </div>

                <div class="form-group">
                    <label>Project Time </label>
                    <input type="text" class="form-control" id="project_time" name="project_time">
                    <div class="invalid-feedback error_project_time">
                    </div>
                </div>

                <div class="form-group">
                    <label>Project Description</label>
                    <textarea type="text" class="form-control" id="project_description" name="project_description"></textarea>
                    <div class="invalid-feedback error_project_description">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btnsimpan"><i class="fa fa-share-square"></i> Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            theme: "bootstrap4"
        });
        $('textarea#project_description').summernote({
            height: 250,
            minHeight: null,
            maxHeight: null,
            focus: true
        });
        $('.formtambah').submit(function(e) {
            let title = $('input#project_name').val()
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: {
                    project_name: $('input#project_name').val(),
                    project_category: $('select#project_category').val(),
                    project_order: $('input#project_order').val(),
                    project_roles: $('input#project_roles').val(),
                    project_time: $('input#project_time').val(),
                    project_slug: title.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, ''),
                    project_description: $('textarea#project_description').val(),
                },
                dataType: "json",
                beforeSend: function() {
                    $('.btnsimpan').attr('disable', 'disable');
                    $('.btnsimpan').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...</i>');
                },
                complete: function() {
                    $('.btnsimpan').removeAttr('disable', 'disable');
                    $('.btnsimpan').html('<i class="fa fa-share-square"></i>  Simpan');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.project_name) {
                            $('#project_name').addClass('is-invalid');
                            $('.error_project_name').html(response.error.project_name);
                        } else {
                            $('#project_name').removeClass('is-invalid');
                            $('.error_project_name').html('');
                        }

                        if (response.error.project_category) {
                            $('#project_category').addClass('is-invalid');
                            $('.error_project_category').html(response.error.project_category);
                        } else {
                            $('#project_category').removeClass('is-invalid');
                            $('.error_project_category').html('');
                        }

                        if (response.error.project_order) {
                            $('#project_order').addClass('is-invalid');
                            $('.error_project_order').html(response.error.project_order);
                        } else {
                            $('#project_order').removeClass('is-invalid');
                            $('.error_project_order').html('');
                        }

                        if (response.error.project_roles) {
                            $('#project_roles').addClass('is-invalid');
                            $('.error_project_roles').html(response.error.project_roles);
                        } else {
                            $('#project_roles').removeClass('is-invalid');
                            $('.error_project_roles').html('');
                        }

                        if (response.error.project_time) {
                            $('#project_time').addClass('is-invalid');
                            $('.error_project_time').html(response.error.project_time);
                        } else {
                            $('#project_time').removeClass('is-invalid');
                            $('.error_project_time').html('');
                        }

                        if (response.error.project_description) {
                            $('#project_description').addClass('is-invalid');
                            $('.error_project_description').html(response.error.project_description);
                        } else {
                            $('#project_description').removeClass('is-invalid');
                            $('.error_project_description').html('');
                        }

                    } else {
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.sukses,
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('#modaltambah').modal('hide');
                        listproject();
                    }
                }
            });
        })
    });
</script>