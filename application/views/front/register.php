<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPDB | Registrasi Siswa</title>
    <link rel="icon" type="image/ico" href="<?= base_url('assets/templates/front/'); ?>img/logo.png">

    <link rel="stylesheet" href="<?= base_url('assets/templates/front/'); ?>css/app.css">
    <link href="<?= base_url('assets/templates/front/'); ?>css/style.css?v=1.2" rel="stylesheet">

    <script src="<?= base_url('assets/templates/front/'); ?>js/jquery.min.js"></script>

    <!-- <link href="<?= base_url('assets/templates/front/'); ?>css/icons.css" rel="stylesheet"> -->

    <style>
        body {
            padding-top: 0px ;
        }

        .misc-box {
            box-shadow: 0px 0px 0px 0px #888888;
            transition: 0.2s;
            border-radius: 5px;
        }
        .misc-box:hover {
            box-shadow: 0px 0px 5px 5px #888888;
            border-radius: 10px;
        }
        .btn {
            border-radius: 2px !important;
            transition: 0.2s;
        }
        .btn:hover {
            border: 1px solid red !important;
        }
    </style>

</head>

<body class="bg-light" style="height: auto; background-image:url(<?= base_url('assets/templates/front/'); ?>img/bg-3.jpg); background-repeat: no-repeat; background-size: cover">
    <div id="app" class="misc-wrapper">
        <div class="misc-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center mb-2">
                        <a href="<?= base_url();?>" title="Kembali ke Dashboard">
                            <img alt="" src="<?= base_url('assets/templates/front/'); ?>img/logo.png" class="logo-icon margin-r-10">
                        </a>
                        <h3>PENERIMAAN PESERTA DIDIK BARU</h3>
                        <h4>Tahun Pelajaran 2020 / 2021</h4>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="misc-box">
                        <h5 class="text-center">FORMULIR PENDAFTARAN</h5><hr>
                            <form id="main-form" role="form" method="POST" action="<?= base_url('auth/register'); ?>">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash() ;?>" style="display:none">
                                <div class="form-group">
                                    <label for="nisn">NISN ( <span class="text-danger"> * </span>)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-check-square"></i></span>
                                        </div>
                                        <input id="nisn" name="nisn" type="text" value="<?= set_value('nisn'); ?>" placeholder="Nomor Induk Siswa Nasional" class="form-control">
                                    </div>
                                    <small class="text-danger"><?= form_error('nisn'); ?></small>
                                </div>

                                <div class="form-group">
                                    <label for="nama">NAMA LENGKAP ( <span class="text-danger"> * </span>)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input id="nama" name="nama" type="text" value="<?= set_value('nama'); ?>" placeholder="Nama Lengkap Sesuai Ijazah Sebelumnya" class="form-control">
                                    </div>
                                    <small class="text-danger"><?= form_error('nama'); ?></small>
                                </div>

                                <div class="form-group">
                                    <label for="tempat_lahir">TEMPAT LAHIR ( <span class="text-danger"> * </span>)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-address-book"></i></span>
                                        </div>
                                        <input id="tempat_lahir" name="tempat_lahir" type="text" value="<?= set_value('tempat_lahir'); ?>" placeholder="Tempat Lahir Sesuai Ijazah Sebelumnya" class="form-control">
                                    </div>
                                    <small class="text-danger"><?= form_error('tempat_lahir'); ?></small>
                                </div>

                                <div class="form-group">
                                    <label for="tgl">TANGGAL LAHIR ( <span class="text-danger"> * </span>)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-alt"></i></span>
                                        </div>
                                        <select style="margin-right: 10px" name="tgl_lahir" id="tgl_lahir" class="form-control col-sm-3" required>
                                            <option value="">pilih tgl</option>
                                            <?php foreach ($tgl as $tg) :?>
                                                <option <?= set_select('tgl_lahir', $tg) ;?>><?= $tg ;?></option>
                                            <?php endforeach ;?>
                                        </select>
                                        <select style="margin-right: 10px" name="bln_lahir" id="bln_lahir" class="form-control col-sm-3" required>
                                            <option value="">pilih bln</option>
                                            <?php foreach ($bln as $bl) :?>
                                                <option <?= set_select('bln_lahir', $bl) ;?>><?= $bl ;?></option>
                                            <?php endforeach ;?>
                                        </select>
                                        <input type="number" name="tahun_lahir" id="tahun_lahir" class="form-control" value="<?= set_value('tahun_lahir'); ?>" required>
                                    </div>
                                    <small class="text-danger"><?= form_error('tahun_lahir'); ?></small>
                                </div>

                                <div class="form-group">
                                    <label for="validasi">VALIDASI ( <span class="text-danger"> * </span>)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input id="validasi" name="validasi" type="number" value="" placeholder="<?= $a . ' + ' . $b . ' = ....'; ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-flat btn-primary btn-block"><i class="fa fa-sign-in"></i> Daftar</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">Sudah melakukan pendaftaran? <a href="<?= base_url('auth/login'); ?>">Login</a></div>
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

    <script src="<?= base_url('assets/templates/front/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/templates/front/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/templates/front/'); ?>js/sweetalert.all.js"></script>

</body>

</html>