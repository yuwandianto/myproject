<div class="container-fluid">

    <form action="<?php echo base_url('home/proses_tambah_isib') ?>" method="post">
        <div class="form-group row">
            <label for="berita" class="col-sm-2 col-form-label">Berita</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="berita">
            </div>
        </div>

        <!-- <div class="form-group row">
            <label for="link" class="col-sm-2 col-form-label">Link</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="link">
            </div>
        </div> -->
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-7">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>

</div>