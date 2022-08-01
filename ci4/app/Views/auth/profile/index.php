<?= $this->extend('layout/script') ?>

<?= $this->section('judul') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item active"><a href="javascript:void(0);">Profile</a></li>
    </ol>
</div>
<?= $this->endSection('judul') ?>

<?= $this->section('isi') ?>

<!-- <p class="mt-1 mb-2">Catatan :<br>
    <i class="mdi mdi-information"></i> Informasi. <br>
</p> -->

<div class="card shadow-lg">
    <div class="card-header pb-0">
        <h6 class="card-title mb-2">Profile</h6>
        <div class="card-options">
            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
            <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
    </div>
    <div class="card-body">
        <?= form_open('profile/update', ['class' => 'updateprofil']) ?>
        <?= csrf_field() ?>
        <div class="container-fluid">

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">About Me <code>*</code> </label>
                <textarea style="height: 150px;" type="text" class="form-control" id="about_me" name="about_me"><?= $profile['about_me'] ?></textarea>
                <div class="invalid-feedback error_about_me"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">City <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fa fa-city"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="city" name="city" value="<?= $profile['city'] ?>">
                </div>
                <div class="invalid-feedback error_city"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">Birthplace <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fa fa-city"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="birthplace" name="birthplace" value="<?= $profile['birthplace'] ?>">
                </div>
                <div class="invalid-feedback error_birthplace"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">Status <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fa fab fa-user-astronaut"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="status" name="status" value="<?= $profile['status'] ?>">
                </div>
                <div class="invalid-feedback error_status"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">Email <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fa fa-mail-bulk"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="email" name="email" value="<?= $profile['email'] ?>">
                </div>
                <div class="invalid-feedback error_email"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">Facebook <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fab fa-facebook"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="facebook" name="facebook" value="<?= $profile['facebook'] ?>">
                </div>
                <div class="invalid-feedback error_facebook"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">Instagram <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fab fa-instagram"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="instagram" name="instagram" value="<?= $profile['instagram'] ?>">
                </div>
                <div class="invalid-feedback error_instagram"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">Youtube <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fab fa-youtube"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="youtube" name="youtube" value="<?= $profile['youtube'] ?>">
                </div>
                <div class="invalid-feedback error_youtube"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">linkedin <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fab fa-linkedin"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="linkedin" name="linkedin" value="<?= $profile['linkedin'] ?>">
                </div>
                <div class="invalid-feedback error_linkedin"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">Github <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fab fa-github"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="github" name="github" value="<?= $profile['github'] ?>">
                </div>
                <div class="invalid-feedback error_github"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label class="form-label">Kaggle <code>*</code> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fab fa-kaggle"></i> </div>
                    </div>
                    <input type="inputan" class="form-control" id="kaggle" name="kaggle" value="<?= $profile['kaggle'] ?>">
                </div>
                <div class="invalid-feedback error_kaggle"></div>
                </div>
            </div>

             
            <div style="position: absolute; right: 0;" class="row">
                <input class="btn btn-warning mr-4" type="submit" value="Update" ></input>
            </div>

            <br>
            
        </div>
        <?= form_close() ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            theme: "bootstrap4"
        });

        $('textarea#about_me').summernote({
            height: 250,
            minHeight: null,
            maxHeight: null,
            focus: true
        });
        
        $('.updateprofil').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: {
                    city: $('input#city').val(),
                    birthplace: $('input#birthplace').val(),
                    status: $('input#status').val(),
                    email: $('input#email').val(),
                    facebook: $('input#facebook').val(),
                    instagram: $('input#instagram').val(),
                    youtube: $('input#youtube').val(),
                    linkedin: $('input#linkedin').val(),
                    github: $('input#github').val(),
                    kaggle: $('input#kaggle').val(),
                    about_me: $('textarea#about_me').val(),
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

                        if (response.error.linkedin) {
                            $('#linkedin').addClass('is-invalid');
                            $('.error_linkedin').html(response.error.linkedin);
                        } else {
                            $('#linkedin').removeClass('is-invalid');
                            $('.error_linkedin').html('');
                        }

                        if (response.error.kaggle) {
                            $('#kaggle').addClass('is-invalid');
                            $('.error_kaggle').html(response.error.kaggle);
                        } else {
                            $('#kaggle').removeClass('is-invalid');
                            $('.error_kaggle').html('');
                        }

                        if (response.error.github) {
                            $('#github').addClass('is-invalid');
                            $('.error_github').html(response.error.github);
                        } else {
                            $('#github').removeClass('is-invalid');
                            $('.error_github').html('');
                        }

                        if (response.error.youtube) {
                            $('#youtube').addClass('is-invalid');
                            $('.error_youtube').html(response.error.youtube);
                        } else {
                            $('#youtube').removeClass('is-invalid');
                            $('.error_youtube').html('');
                        }

                        if (response.error.instagram) {
                            $('#instagram').addClass('is-invalid');
                            $('.error_instagram').html(response.error.instagram);
                        } else {
                            $('#instagram').removeClass('is-invalid');
                            $('.error_instagram').html('');
                        }

                        if (response.error.facebook) {
                            $('#facebook').addClass('is-invalid');
                            $('.error_facebook').html(response.error.facebook);
                        } else {
                            $('#facebook').removeClass('is-invalid');
                            $('.error_facebook').html('');
                        }

                        if (response.error.email) {
                            $('#email').addClass('is-invalid');
                            $('.error_email').html(response.error.email);
                        } else {
                            $('#email').removeClass('is-invalid');
                            $('.error_email').html('');
                        }

                        if (response.error.status) {
                            $('#status').addClass('is-invalid');
                            $('.error_status').html(response.error.status);
                        } else {
                            $('#status').removeClass('is-invalid');
                            $('.error_status').html('');
                        }

                        if (response.error.birthplace) {
                            $('#birthplace').addClass('is-invalid');
                            $('.error_birthplace').html(response.error.birthplace);
                        } else {
                            $('#birthplace').removeClass('is-invalid');
                            $('.error_birthplace').html('');
                        }

                        if (response.error.city) {
                            $('#city').addClass('is-invalid');
                            $('.error_city').html(response.error.city);
                        } else {
                            $('#city').removeClass('is-invalid');
                            $('.error_city').html('');
                        }

                        if (response.error.about_me) {
                            $('#about_me').addClass('is-invalid');
                            $('.error_about_me').html(response.error.about_me);
                        } else {
                            $('#about_me').removeClass('is-invalid');
                            $('.error_about_me').html('');
                        }

                    } else {
                        Swal.fire({
                            title: "Data Berhasil Diupdate!",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                                window.location = response.sukses.link;
                        });
                    }
                }
            });
        })

    });

    
</script>

<?= $this->endSection('isi') ?>