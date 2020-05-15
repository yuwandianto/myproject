<div class="container-fluid">

    <!-- <form action="<?php echo base_url('home/proses_edit_tabel') ?>" method="post"> -->
    <?= form_open('home/proses_edit_tabel');?>

        <input type="hidden" name="id" value="<?php echo $judul['id']; ?>">
        <div class="form-group row">
            <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="kegiatan" value="<?= $judul['kegiatan']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="Dibuka" class="col-sm-2 col-form-label">Dibuka</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="dibuka" value="<?= $judul['dibuka']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="Ditutup" class="col-sm-2 col-form-label">Ditutup</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="ditutup" value="<?= $judul['ditutup']; ?>">
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