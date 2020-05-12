<div class="container-fluid">

    <form action="<?php echo base_url('home/proses_edit_berita') ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $berita['id']; ?>">
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Nama berita</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="nama_berita" value="<?= $berita['nama_berita']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="Title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="title_berita" value="<?= $berita['title_berita']; ?>">
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