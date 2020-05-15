<div class="container-fluid">

    <?php echo form_open('Slide/proses_set1'); ?>

    <input type="hidden" name="id" value="<?php echo $slide1['id']; ?>">
    <div class="form-group row">
        <label for="slide1" class="col-sm-2 col-form-label">Judul Slide1</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="slide1" value="<?= $slide1['slide1']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="title1" class="col-sm-2 col-form-label">title1</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="title1" value="<?= $slide1['title1']; ?>">
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