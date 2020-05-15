<?php
$menu = $this->uri->segment(2);; ?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="javascript:void(0)">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PPDB ADMIN</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Menu Aplikasi
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php if ($menu == '') {
                        echo 'active';
                      } ?>">
    <a class="nav-link" href="<?= base_url('home'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item <?php if ($menu == 'sekolah' || $menu == 'jadwal' || $menu == 'slider' || $menu == 'berita') {
                        echo 'active';
                      } ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Pengaturan</span>
    </a>
    <div id="collapseUtilities" class="collapse <?php if ($menu == 'sekolah' || $menu == 'jadwal' || $menu == 'slider' || $menu == 'berita') {
                                                  echo 'show';
                                                } ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <h6 class="collapse-header">Menu Pengaturan:</h6>
        <a class="collapse-item <?php if ($menu == 'sekolah') {
                                  echo 'active';
                                } ?>" href="<?= base_url('home/sekolah'); ?>">Sekolah</a>
        <a class="collapse-item <?php if ($menu == 'jadwal') {
                                  echo 'active';
                                } ?>" href="<?= base_url('home/dashboard'); ?>">Jadwal</a>
        <a class="collapse-item <?php if ($menu == 'slider') {
                                  echo 'active';
                                } ?>" href="<?= base_url('Slide/slide'); ?>">SlideShow</a>
        <a class="collapse-item <?php if ($menu == 'berita') {
                                  echo 'active';
                                } ?>" href="<?= base_url('home/berita'); ?>">Berita dan Pengumuman</a>


      </div>
    </div>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('pendaftar/data') ?>">
      <i class="fas fa-fw fa-user-cog"></i>
      <span>Data Pendaftar</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->