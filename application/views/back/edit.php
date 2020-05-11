<div class="container-fluid">

    <form action="<?php echo base_url('home/proses_edit') ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $judul['id']; ?>">
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="judul1" value="<?= $judul['judul1']; ?>">
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