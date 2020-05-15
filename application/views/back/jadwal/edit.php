<div class="container-fluid">

    <?php echo form_open('home/proses_edit'); ?>
    <input type="hidden" name="id" value="<?php echo $jadwal['id']; ?>">
    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label">Nama Jadwal</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="nama_jadwal" value="<?= $jadwal['nama_jadwal']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="Title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="title_jadwal" value="<?= $jadwal['title_jadwal']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="ket" value="<?= $jadwal['ket']; ?>">
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