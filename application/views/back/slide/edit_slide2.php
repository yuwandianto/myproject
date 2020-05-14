<div class="container-fluid">

    <form action="<?php echo base_url('Slide/proses_set2') ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $slide2['id']; ?>">
        <div class="form-group row">
            <label for="slide2" class="col-sm-2 col-form-label">Judul slide2</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="slide2" value="<?= $slide2['slide2']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="title2" class="col-sm-2 col-form-label">Title2</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="title2" value="<?= $slide2['title2']; ?>">
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