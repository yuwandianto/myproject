<div class="container-fluid">

    <?php echo form_open('Slide/proses_set6'); ?>

    <input type="hidden" name="id" value="<?php echo $slide6['id']; ?>">
    <div class="form-group row">
        <label for="slide6" class="col-sm-2 col-form-label">Judul slide6</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="slide6" value="<?= $slide6['slide6']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="title6" class="col-sm-2 col-form-label">Title6</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="title6" value="<?= $slide6['title6']; ?>">
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