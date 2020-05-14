<div class="container-fluid">

    <form action="<?php echo base_url('Slide/proses_set4') ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $slide4['id']; ?>">
        <div class="form-group row">
            <label for="slide4" class="col-sm-2 col-form-label">Judul slide4</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="slide4" value="<?= $slide4['slide4']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="title4" class="col-sm-2 col-form-label">Title4</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="title4" value="<?= $slide4['title4']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-7">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>

</div>