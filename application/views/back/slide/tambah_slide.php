<div class="container-fluid">
    <h3>Halaman Tambah SLide</h3>
    <hr>

    <form action="<?php echo base_url('home/proses_tambah_isib') ?>" method="post">
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">judul</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="judul">
            </div>
        </div>


        <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label">text</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="text">
            </div>
        </div>

        <div class="form-group row">
            <label for="Gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-7">
                <input type="file" class="form-control" name="Gambar">
            </div>
        </div>

        <div class="form-group row">
            <label for="berita" class="col-sm-2 col-form-label"><a href="<?php echo base_url('Slide/slide'); ?>" class="btn btn-sm btn-success">Kembali</a></label>
            <div class="col-sm-7">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
</div>