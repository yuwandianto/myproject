<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li <?php if ($this->uri->segment(2) == '') { echo 'class="active"';} ;?> ><a href="<?= base_url('siswa');?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>

        <?php if ($siswa['benar'] != ''): ?>
        <li><a target="_blank" href="<?= base_url('siswa/cetakbuktidaftar');?>"><i class="icon-print"></i><span>Cetak Bukti Daftar</span> </a> </li> 
        <?php endif;?>

        <?php if ($siswa['benar'] != '' && $siswa['email'] !=''): ?>
          <li><a href="<?= base_url('siswa/kirimbuktidaftar');?>"><i class="icon-envelope"></i><span>Kirim bukti ke email</span> </a> </li>
        <?php endif;?>

        <li><a href="<?= base_url('auth/logout');?>"><i class="icon-signout"></i><span>Keluar</span> </a> </li>
        <li></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->