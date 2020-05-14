<div class="container-fluid">

    <?php echo form_open('Slide/proses_set7'); ?>

    <input type="hidden" name="id" value="<?php echo $slide7['id']; ?>">
    <div class="form-group row">
        <label for="slide7" class="col-sm-2 col-form-label">Judul slide7</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="slide7" value="<?= $slide7['slide7']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="title7" class="col-sm-2 col-form-label">Title7</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="title7" value="<?= $slide7['title7']; ?>">
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