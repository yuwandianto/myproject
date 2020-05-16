<div class="container-fluid">


    <?php echo form_open('home/proses_edit_isib'); ?>

    <input type="hidden" name="id" value="<?php echo $isi_berita['id']; ?>">

    <div class="form-group row">
        <label for="berita" class="col-sm-2 col-form-label">Isi Berita</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="berita" value="<?php echo $isi_berita['berita']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-7">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>

</div>