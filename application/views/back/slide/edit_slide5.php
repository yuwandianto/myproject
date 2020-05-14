<div class="container-fluid">

    <form action="<?php echo base_url('Slide/proses_set5') ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $slide5['id']; ?>">
        <div class="form-group row">
            <label for="slide5" class="col-sm-2 col-form-label">Judul slide5</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="slide5" value="<?= $slide5['slide5']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="title5" class="col-sm-2 col-form-label">Title5</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="title5" value="<?= $slide5['title5']; ?>">
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