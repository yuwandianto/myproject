<div class="container-fluid">
    <h3>Setting Berita</h3>
    <hr>
    <form action="<?php echo base_url('Home/proses_ubah_judul') ?>" method="post">
        <table class="table table-bordered text-center">
            <thead>
                <th>Nama Berita</th>
                <th>Title</th>
                <th colspan="2">Setting</th>
            </thead>
            <tbody>

                <td><?php echo $berita['nama_berita']; ?></td>
                <td><?php echo $berita['title_berita']; ?></td>
                <td>
                    <a href="<?php echo base_url() ?>Home/edit_berita/<?php echo $berita['id']; ?>" class="badge badge-primary">edit</a>
                    <a href="<?php echo base_url() ?>Home/hapus_berita/<?php echo $berita['id']; ?>" class="badge badge-danger">hapus</a>
                </td>
            </tbody>
        </table>
    </form>



    <br>
    <hr>
    <br>

    <h3 class="mb-3">Setting Isi Berita
        <a href="<?php echo base_url('Home/tambah_isib') ?>" class="btn btn-primary float-right">Tambah</a>
    </h3>
    <hr>


    <form action="<?php echo base_url('Home/proses_tambah_isib') ?>" method="post">
        <table class="table table-bordered text-center">
            <thead>
                <th>#</th>
                <th>Isi Berita</th>
                <th>Link</th>
                <th colspan="2">Setting</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($isi_berita as $b) : ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $b['berita']; ?></td>
                    <td><?php echo $b['link']; ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>Home/edit_isiberita/<?php echo $b['id']; ?>" class="badge badge-primary">edit</a>
                        <a href="<?php echo base_url() ?>Home/hapus_isib/<?php echo $b['id']; ?>" class="badge badge-danger">hapus</a>
                    </td>
            </tbody>
        <?php endforeach; ?>
        </table>
    </form>
</div>