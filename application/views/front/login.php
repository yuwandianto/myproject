
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="TfJocSVsNWexYkZykdGKFNETBWgfhhwgDKRHCJNu">

        <title>PPDB | Login Siswa</title>
        <link rel="icon" type="image/ico" href="<?= base_url('assets/templates/front/');?>img/logo.png">

        <link rel="stylesheet" href="<?= base_url('assets/templates/front/');?>css/app.css">
        <link href="<?= base_url('assets/templates/front/');?>css/style.css?v=1.2" rel="stylesheet">
        
        <script src="<?= base_url('assets/templates/front/');?>js/jquery.min.js"></script>
        
        <link href="<?= base_url('assets/templates/front/');?>css/icons.css" rel="stylesheet">
        
    </head>
    <body class="bg-light" style="height: auto;background-image:url(<?= base_url('assets/templates/front/');?>img/bg-3.jpg);">
        <div id="app" class="misc-wrapper">
            <div class="misc-content" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-3">
                <a href="/" title="Kembali ke Dashboard">
                    <img alt="" src="<?= base_url('assets/templates/front/');?>img/logo.png" class="logo-icon margin-r-10"> 
                </a>
                <h3>KARTU INDONESIA PINTAR KULIAH</h3>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="misc-box">
                                        <form id="main-form" role="form" method="POST" action="<?= base_url('assets/templates/front/');?>siswa/auth/login">
                        <input type="hidden" name="_token" value="TfJocSVsNWexYkZykdGKFNETBWgfhhwgDKRHCJNu">                        <div class="form-group">
                            <label for="no_pendaftaran">No. Pendaftaran</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i> </span>
                                </div>
                                <input id="no_pendaftaran" name="no_pendaftaran" type="text" value="" placeholder="No. Pendaftaran" class="form-control " required>
                                <!--<span class="icon-user text-muted icon-input"></span>-->
                            </div>
                                                    </div>
                        <div class="form-group">
                            <label for="kode_akses">Kode Akses</label>
                            <div class="input-group" id="show_hide_password">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i> </span>
                                </div>
                                <input id="kode_akses" name="kode_akses" type="password" placeholder="Kode Akses" class="form-control " required>
                                <div class="input-group-append">
                                    <button class="input-group-text" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                </div>
                            </div>
                                                    </div>
                        <div class="clearfix">
                            <div class="text-center">
                                <button type="submit" class="btn btn-flat btn-primary btn-block"><i class="fa fa-sign-in"></i> Masuk</button>
                            </div>
                        </div>
                        <hr> 
                        <div class="text-center">Belum punya akun? <a href="<?= base_url('assets/templates/front/');?>siswa/pendaftaran/baru">Daftar</a></div>
                    </form>
                </div>
                <div class="text-center misc-footer">
                    					<p class="small">
						Copyright &copy; 2020 | Kartu Indonesia Pintar Kuliah oleh Kemdikbud
                    </p>
                    				</div>
            </div>
        </div>
    </div>
</div>
        </div>

        <script src="<?= base_url('assets/templates/front/');?>js/popper.min.js">
        </script>
        <script src="<?= base_url('assets/templates/front/');?>js/bootstrap.min.js">
        </script>
        <script src="<?= base_url('assets/templates/front/');?>js/ace-responsive-menu-min.js">
        </script>
        <script src="<?= base_url('assets/templates/front/');?>js/pace.min.js">
        </script>
        <script src="<?= base_url('assets/templates/front/');?>js/jasny-bootstrap.min.js">
        </script>
        <script src="<?= base_url('assets/templates/front/');?>js/jquery.slimscroll.min.js">
        </script>
        <script src="<?= base_url('assets/templates/front/');?>js/jquery.nanoscroller.min.js">
        </script>
        <script src="<?= base_url('assets/templates/front/');?>js/metisMenu.min.js">
        </script>
        <!-- Scripts -->
        <script src="" defer>
        </script>
        <script src="<?= base_url('assets/templates/front/');?>js/app.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/jquery.validate.min.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/select2.min.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/kipk.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/custom.js?v=1.1" defer></script>
        <script src="<?= base_url('assets/templates/front/');?>js/sweetalert.all.js"></script>
<script>
    $(document).ready(function() {
        $("#show_hide_password button").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "fa-eye-slash" );
                $('#show_hide_password i').removeClass( "fa-eye" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                $('#show_hide_password i').addClass( "fa-eye" );
            }
        });
    });
</script>
        </body>
</html>
