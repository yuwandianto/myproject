<div class="container-fluid">
    <h3>Halaman Data Sekolah</h3>
    <hr>

    <?php echo form_open_multipart('Slide/proses_edit_slide') ?>

    <input type="hidden" name="id" value="<?php echo $sekolah['id']; ?>">

    <div class="form-group row">
        <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $sekolah['nama_sekolah']; ?>">
        </div>
    </div>


    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-7">
            <input type="alamat" class="form-control" name="alamat" value="<?php echo $sekolah['alamat']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="email_sekolah" class="col-sm-2 col-form-label">Email Sekolah</label>
        <div class="col-sm-7">
            <input type="email_sekolah" class="form-control" name="email_sekolah" value="<?php echo $sekolah['email_sekolah']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="tlp_sekolah" class="col-sm-2 col-form-label">Telp Sekolah</label>
        <div class="col-sm-7">
            <input type="tlp_sekolah" class="form-control" name="tlp_sekolah" value="<?php echo $sekolah['tlp_sekolah']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="logo" class="col-sm-2 col-form-label">Logo</label>
        <div class="col-sm-7">
            <input type="file" class="form-control" name="userfile" size="20">
        </div>
    </div>
    <div class="form-group row">
        <label for="logo" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-7">
            <img src="<?php echo base_url() . '/assets/images/' . $sekolah['logo']; ?>" alt="..." height="70">
        </div>
    </div>


    <div class="form-group row">
        <label for="berita" class="col-sm-2 col-form-label"><a href="<?php echo base_url('Slide/slide'); ?>" class="btn btn-sm btn-success">Kembali</a></label>
        <div class="col-sm-7">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
</form>