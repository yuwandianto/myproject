        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="/">
                    <img src="<?= base_url('assets/templates/front/');?>img/logo.png" alt="" class="logo-light" height="60" />
                    <img src="<?= base_url('assets/templates/front/');?>img/logo.png" alt="" class="logo-dark" height="60" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu">
                    </i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
    <li class="nav-item active">
        <a href="#home" class="nav-link">Beranda
        </a>
    </li>
    <li class="nav-item">
        <a href="#jadwal" class="nav-link">Jadwal
        </a>
    </li>
    <li class="nav-item">
        <a href="#berita" class="nav-link">Berita
        </a>
    </li>
    <li class="nav-item">
        <a href="#profil" class="nav-link">Profil Perguruan Tinggi
        </a>
    </li>
    <li class="nav-item">
        <a href="#kontak" class="nav-link">Kontak Kami
        </a>
    </li> 
</ul>
                                        <button onclick="window.location.href = 'siswa/auth/login';" class="btn btn-info navbar-btn">Login Siswa
                    </button>
                                    </div>
            </div>
        </nav>
        <!-- Navbar End -->