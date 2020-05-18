<div class="container-fluid">
    <h3>Halaman Data pengguna</h3>
    <hr>

    <?php echo form_open_multipart('Profile/proses_ubah_pengguna') ?>

    <input type="hidden" name="id" value="<?php echo $pengguna['xid']; ?>">

    <div class="form-group row">
        <label for="xemail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="xemail" value="<?php echo $pengguna['xemail']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="xpass" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="xpass" value="<?php echo $pengguna['xpass']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="nama" value="<?php echo $pengguna['nama']; ?>">
        </div>
    </div>


    <!-- <div class="form-group row">
        <label for="logo" class="col-sm-2 col-form-label">Logo</label>
        <div class="col-sm-7">
            <input type="file" class="form-control" name="userfile" size="20">
        </div>
    </div>
    <div class="form-group row">
        <label for="logo" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-7">
            <img src="<?php echo base_url() . '/assets/images/' . $pengguna['logo']; ?>" alt="..." height="70">
        </div>
    </div> -->


    <div class="form-group row">
        <label for="berita" class="col-sm-2 col-form-label"><a href="<?php echo base_url('Slide/slide'); ?>" class="btn btn-sm btn-success">Kembali</a></label>
        <div class="col-sm-7">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
</form>