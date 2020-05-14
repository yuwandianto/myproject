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
    Administrator
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php if ($menu == '') {
                        echo 'active';
                      } ?>">
    <a class="nav-link" href="<?= base_url('home'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Master Setting</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Setting Dashboard:</h6>
        <a class="collapse-item" href="<?php echo base_url('home/slide') ?>">Slide</a>
        <a class="collapse-item" href="<?php echo base_url('home/dashboard') ?>">Jadwal</a>
        <a class="collapse-item" href="<?= base_url('Home/berita'); ?>">Berita</a>
      </div>
    </div>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->