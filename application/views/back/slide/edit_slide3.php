<div class="container-fluid">

    <?php echo form_open('Slide/proses_set3'); ?>

    <input type="hidden" name="id" value="<?php echo $slide3['id']; ?>">
    <div class="form-group row">
        <label for="slide3" class="col-sm-2 col-form-label">Judul slide3</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="slide3" value="<?= $slide3['slide3']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="title3" class="col-sm-2 col-form-label">Title3</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="title3" value="<?= $slide3['title3']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-7">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
    <?php echo form_close() ?>

</div>