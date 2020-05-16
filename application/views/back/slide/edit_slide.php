<div class="container-fluid">
    <h3>Halaman Tambah SLide</h3>
    <hr>

    <?php echo form_open_multipart('Slide/proses_edit_slide') ?>

    <input type="hidden" name="id" value="<?php echo $id_slide['id']; ?>">

    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label">judul</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="judul" value="<?php echo $id_slide['judul']; ?>">
        </div>
    </div>


    <div class="form-group row">
        <label for="text" class="col-sm-2 col-form-label">text</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="text" value="<?php echo $id_slide['text']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="Gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-7">
            <input type="file" class="form-control" name="userfile" size="20">
        </div>
    </div>
    <div class="form-group row">
        <label for="Gambar" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-7">
            <img src="<?php echo base_url() . '/assets/images/' . $id_slide['gambar']; ?>" alt="..." height="70">
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