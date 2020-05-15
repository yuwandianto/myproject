<!-- Content start -->
<!-- home start -->
<section class="bg-home bg-hexa" id="home">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <!-- Menetukan jumlah slidenya sekaligus lopping slider indikator -->
            <?php for ($i = 0 ; $i < $jml_sld ; $i++) :?>
                <li data-target="#carouselExampleControls" data-slide-to="<?= $i;?>" class="<?php if($i == '0') {echo 'active';};?>"></li>
            <?php endfor ;?>
            
        </ol>
        <div class="carousel-inner">
            <!-- Looping data dari database -->
           <?php $no = 1 ; foreach ($new_sld as $sl) :?>
            <div class="carousel-item <?php if ($no++ == '1') {echo 'active';} ?>">
                <div class="home-center">
                    <div class="home-desc-center">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-last-">
                                    <div class="home-title mo-mb-20 text-white">
                                        <h3 class="mb-4 text-white">
                                            <?php echo $sl->judul; ?> </h3>
                                        <p class="text-white-70 home-desc" style="font-size:14pt;">
                                            
                                            <?php echo $sl->text; ?>
                                            
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-md-7 order-first-" style="margin: 0 auto;">
                                    <div class="home-img position-relative">
                                        <img src="<?= base_url('assets/images/').$sl->gambar;?>" alt="" class="home-first-img">
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container-fluid -->
                    </div>
                </div>
            </div>
            <?php endforeach ;?>

        </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>
<!-- home end -->
<!-- clients start -->
<section class="p-0" id="nav-panduan">
    <div class="container-fluid">
        <div class="clients p-4 bg-white">
            <div class="row">
                <div class="col-md-4 offset-lg-2 offset-md-2">
                    <div class="client-images">
                        <a href="<?= base_url(); ?>auth/register">
                            <img src="<?= base_url('assets/templates/front/'); ?>img/ICO3.svg" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="client-images">
                        <a href="<?= base_url(); ?>panduan">
                            <img src="<?= base_url('assets/templates/front/'); ?>img/ICO4.svg" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end container-fluid -->
</section>
<!-- clients end -->
<!-- features start -->
<section class="section bg-light pt-2" id="jadwal">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4 pb-1">
                    <h2 class="mb-3"><?php echo $jadwal['nama_jadwal']; ?>
                    </h2>
                    <p class="text-muted"><?php echo $jadwal['title_jadwal'] ?>
                    </p>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#
                                    </th>
                                    <th>Kegiatan
                                    </th>
                                    <th>Dibuka
                                    </th>
                                    <th>Ditutup
                                    </th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            foreach ($j_tabel as $j) : ?>
                                <tbody>

                                    <tr>
                                        <td>
                                            <?php echo $no++; ?>
                                        </td>
                                        <td class="pl-sm-0 pl-md-5" style="text-align:left;">
                                            <?php echo $j['kegiatan'] ?>
                                        </td>
                                        <td>
                                            <?php echo $j['dibuka'] ?>
                                        </td>
                                        <td>
                                            <?php echo $j['ditutup'] ?>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <span>
                    <b>Keterangan:
                    </b>
                    <br> <?php echo $jadwal['ket']; ?>
                </span>
            </div>
        </div>
    </div>
    <!-- end container-fluid -->
</section>
<!-- features end -->
<!-- available demos start -->
<section class="section bg-light" id="berita">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title text-center mb-3">
                    <h2><?php echo $berita['nama_berita']; ?>
                    </h2>
                    <p class="text-muted"><?php echo $berita['title_berita']; ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-4 offset-1 d-none d-lg-block d-md-none">
                <div class="feature-img">
                    <img src="<?= base_url('assets/templates/front/'); ?>img/news-2.svg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="features-content" id="tempat-informasi">
                    <?php foreach ($isi_b as $b) : ?>
                        <a data-toggle="modal" id="getInformasi" data-target="#viewInformasi" data-url="informasi/32" href="#">
                            <h4 class="mb-3">
                                <i class="mdi mdi-album">
                                </i> <?php echo $b['berita']; ?>
                            </h4>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</section>
<!-- available demos end -->

<!-- Modal informasi -->
<!-- Modal -->
<section class="modal fade" id="viewInformasi" tabindex="-1" role="dialog" aria-labelledby="informasi" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content informasi-modal">
        </div>
    </div>
</section>
<!-- end Modal informasi -->
<!-- End Content -->

<!-- cta start -->
<section class="section-sm bg-light" id="kontak">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-9">
                <h2 class="mb-0 mo-mb-20">Hubungi kami di
                </h2>
                <p class="mt-1">
                    Pusat Layanan Pembiayaan Pendidikan
                    <br />
                    Kementerian Pendidikan dan Kebudayaan Republik Indonesia
                    <br />
                    Gedung C Lantai 13, Jl. Jenderal Sudirman, Senayan, Jakarta Pusat 10270
                    <br />
                    <i class="fa fa-envelope" style="color:#fafafa"></i> Email: <a href="mailto:kip.kuliah@kemdikbud.go.id">kip.kuliah@kemdikbud.go.id</a>
                    <br />
                    <i class="fa fa-instagram" style="color:#fafafa"></i> Instagram: <a href="https://www.instagram.com/kipkuliah.kemdikbud">@kipkuliah.kemdikbud</a>
                </p>
            </div>
            <div class="col-md-3">

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</section>
