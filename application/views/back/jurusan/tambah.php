<div class="container-fluid">
    <h3>Halaman Tambah Jurusan</h3>
    <hr>

    <?php echo form_open_multipart('Jurusan/proses_tambah') ?>

    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="judul">
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