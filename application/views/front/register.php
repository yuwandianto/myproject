
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PPDB | Registrasi Siswa</title>
        <link rel="icon" type="image/ico" href="<?= base_url('assets/templates/front/');?>img/logo.png">

        <link rel="stylesheet" href="<?= base_url('assets/templates/front/');?>css/app.css">
        <link href="<?= base_url('assets/templates/front/');?>css/style.css?v=1.2" rel="stylesheet">
        
        <script src="<?= base_url('assets/templates/front/');?>js/jquery.min.js"></script>
        
        <!-- <link href="<?= base_url('assets/templates/front/');?>css/icons.css" rel="stylesheet"> -->
        
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
                <h3>PENERIMAAN PESERTA DIDIK BARU</h3>
                <h4>Tahun Pelajaran 2020 / 2021</h4>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="misc-box">
                    <form id="main-form" role="form" method="POST" action="<?= base_url('auth/register');?>">

                        <div class="form-group">
                            <label for="nisn">NISN <span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-check-square"></i></span>
                                </div>
                                <input id="nisn" name="nisn" type="text" value="" placeholder="Nomor Induk Siswa Nasional" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama">NAMA LENGKAP <span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <input id="nama" name="nama" type="text" value="" placeholder="Nama Lengkap Sesuai Ijazah Sebelumnya" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">TEMPAT LAHIR <span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-address-book"></i></span>
                                </div>
                                <input id="tempat_lahir" name="tempat_lahir" type="text" value="" placeholder="Tempat Lahir Sesuai Ijazah Sebelumnya" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nisn">TANGGAL LAHIR <span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">

                                <!-- <table>
                                    <tr>
                                        <td>
                                            <select name="tgl_lahir" id="tgl_lahir" class="form-control">
                                                <option value="">01</option>
                                            </select>
                                        </td>
                                        <td width="20px"></td>
                                        <td>
                                            <select name="tgl_lahir" id="tgl_lahir" class="form-control">
                                                <option value="">01</option>
                                            </select>
                                        </td>
                                        <td width="20px"></td>
                                        <td>
                                            <input type="number" name="th_lahir" id="th_lahir" class="form-control">
                                        </td>

                                    </tr>
                                </table> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nisn">VALIDASI <span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                </div>
                                <input id="nisn" name="nisn" type="text" value="" placeholder="" class="form-control" required>
                            </div>
                        </div>

                        
                        <div class="clearfix">
                            <div class="text-center">
                                <button type="submit" class="btn btn-flat btn-primary btn-block"><i class="fa fa-sign-in"></i> Masuk</button>
                            </div>
                        </div>
                        <hr> 
                        <div class="text-center">Sudah melakukan pendaftaran? <a href="<?= base_url('auth/login');?>">Login</a></div>
                    </form>
                </div>
                <div class="text-center misc-footer">
                    <p class="small">
						Copyright &copy; 2020 | Penerimaan Peserta Didik Baru
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>

        <script src="<?= base_url('assets/templates/front/');?>js/popper.min.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/templates/front/');?>js/sweetalert.all.js"></script>

    </body>
</html>
