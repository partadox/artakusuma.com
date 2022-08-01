<?= $this->extend('main_auth') ?>

<?= $this->section('isi') ?>

<div class="landing">
    <div class="landing-decoration"></div>

    <div class="landing-info">
        <h1 class="landing-info-title">Welcome</h1>
    </div>

    <div style="margin-top:150px;" class="landing-form">
        <div style="padding-top:50px;' class="form-box login-register-form-element">
            <img class="form-box-decoration overflowing" src="<?= base_url()?>/assets/img/vector/rocket.png" alt="rocket">
            <h2 class="form-box-title">Account Login</h2>

            <?= form_open('login/validasi', ['class' => 'formlogin']) ?>
            <?= csrf_field() ?>
            <form class="form">
                <div class="form-row">
                <div class="form-item">
                    <div class="form-input">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                    </div>
                </div>
                </div>
                <div class="form-row">
                <div class="form-item">
                    <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    </div>
                </div>
                </div>
                <div class="form-row">
                <div class="form-item">
                    <button class="button medium secondary">Login</button>
                </div>
                </div>
            </form>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/assets_panel/js/sweetalert2@10.js"></script>
<!-- jQuery  -->
<script src="<?= base_url() ?>/assets_panel/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets_panel/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/assets_panel/js/metismenu.min.js"></script>
<script src="<?= base_url() ?>/assets_panel/js/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>/assets_panel/js/waves.min.js"></script>
<script src="<?= base_url() ?>/assets_panel/js/front_logreg.js"></script>


<!-- App js -->
<script src="<?= base_url() ?>/assets_panel/js/app.js"></script>

<script>
    $(document).ready(function() {
        $('.formlogin').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnlogin').prop('disable', true);
                    $('.btnlogin').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...')

                },
                complete: function() {
                    $('.btnlogin').prop('disable', false);
                    $('.btnlogin').html('Login')
                },
                success: function(response) {
                    if (response.error) {
                        
                        Swal.fire({
                            title: "Gagal!",
                            text: "User / Password Salah!",
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1250
                        })
                    }

                    if (response.sukses) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Anda berhasil login!",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1250
                        }).then(function() {
                            window.location = response.sukses.link;
                        });

                    }

                    if (response.nonactive) {
                        Swal.fire({
                            title: "Oooopss!",
                            text: "User belum aktif!",
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1250
                        });
                    }
                }
            });
            return false;
        });
    });
</script>

<?= $this->endSection('isi') ?>