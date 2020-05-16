<div class="container-fluid">
    <h3>Halaman Tambah SLide</h3>
    <hr>

    <?php echo form_open_multipart('Slide/proses_tambah_slide') ?>

    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label">judul</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="judul">
        </div>
    </div>


    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">text</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="text">
        </div>
    </div>

    <div class="form-group row">
        <label for="Gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-7">
            <input type="file" class="form-control" name="userfile">
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