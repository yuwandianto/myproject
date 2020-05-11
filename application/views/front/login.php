<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="TfJocSVsNWexYkZykdGKFNETBWgfhhwgDKRHCJNu">

    <title>PPDB | Login Siswa</title>
    <link rel="icon" type="image/ico" href="<?= base_url('assets/templates/front/'); ?>img/logo.png">

    <link rel="stylesheet" href="<?= base_url('assets/templates/front/'); ?>css/app.css">
    <link href="<?= base_url('assets/templates/front/'); ?>css/style.css?v=1.2" rel="stylesheet">

    <script src="<?= base_url('assets/templates/front/'); ?>js/jquery.min.js"></script>



</head>
<div class="flash_data" data-flash_data="<?= $this->session->flashdata('error');?>"></div>

<body class="bg-light" style="height: auto;background-image:url(<?= base_url('assets/templates/front/'); ?>img/bg-3.jpg);">
    <div id="app" class="misc-wrapper">
        <div class="misc-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center mb-3">
                        <a href="/" title="Kembali ke Dashboard">
                            <img alt="" src="<?= base_url('assets/templates/front/'); ?>img/logo.png" class="logo-icon margin-r-10">
                        </a>
                        <h3>PENERIMAAN PESERTA DIDIK BARU</h3>
                        <h4>Tahun Pelajaran 2020 / 2021</h4>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="misc-box">
                            <form id="main-form" role="form" method="POST" action="<?= base_url('auth/login'); ?>">

                                <div class="form-group">
                                    <label for="username">NISN</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-check-square"></i> </span>
                                        </div>
                                        <input id="username" name="username" type="text" value="" placeholder="Nomor Induk Siswa Nasional" class="form-control " required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">PASSWORD</label>
                                    <div class="input-group" id="show_hide_password">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt"></i> </span>
                                        </div>
                                        <input id="password" name="password" type="password" placeholder="Password" class="form-control " required>
                                        <div class="input-group-append">
                                            <button class="input-group-text" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nisn">VALIDASI</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input id="validasi" name="validasi" type="number" value="" placeholder="<?= $a . ' + ' . $b . ' = ....'; ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-flat btn-primary btn-block"><i class="fa fa-sign-in"></i> Masuk</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">Belum punya akun? <a href="<?= base_url('auth/register') ?>">Daftar</a></div>
                            </form>
                        </div>
                        <div class="text-center misc-footer">
                            <p class="small">
                                Copyright &copy; 2020 | Penerimaan Peserta Didik Baru <hr>
                                <?= password_hash('password', PASSWORD_DEFAULT) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/templates/front/'); ?>js/popper.min.js">
    </script>
    <script src="<?= base_url('assets/templates/front/'); ?>js/bootstrap.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    </script>
    <!-- Scripts -->
    
    <!-- <script src="<?= base_url('assets/templates/front/'); ?>js/sweetalert.all.js"></script> -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password button").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("fa-eye-slash");
                    $('#show_hide_password i').removeClass("fa-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("fa-eye-slash");
                    $('#show_hide_password i').addClass("fa-eye");
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            const flash_data = $('.flash_data').data('flash_data');
           
            if (flash_data) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: flash_data,
                })
           }
        })
        </script>

</body>

</html>