<div class="container-fluid">
    <h3>Setting Jadwal</h3>
    <hr>
    <form action="<?php echo base_url('Home/proses_ubah_judul') ?>" method="post">
        <table class="table table-bordered text-center">
            <thead>
                <th>Nama Jadwal</th>
                <th>Title</th>
                <th colspan="2">Setting</th>
            </thead>
            <tbody>

                <td><?php echo $jadwal['nama_jadwal']; ?></td>
                <td><?php echo $jadwal['title_jadwal']; ?></td>
                <td>
                    <a href="<?php echo base_url() ?>Home/edit_data/<?php echo $jadwal['id']; ?>" class="badge badge-primary">edit</a>
                    <a href="<?php echo base_url() ?>Home/hapus_data/<?php echo $jadwal['id']; ?>" class="badge badge-danger">hapus</a>
                </td>
            </tbody>
        </table>
    </form>



    <br>
    <hr>
    <br>

    <h3 class="mb-3">Setting Tabel Jadwal
        <a href="<?php echo base_url('Home/proses_tambah') ?>" class="btn btn-primary float-right">Tambah</a>
    </h3>
    <hr>


    <form action="<?php echo base_url('Home/proses_edit_tabel') ?>" method="post">
        <table class="table table-bordered text-center">
            <thead>
                <th>#</th>
                <th>Kegiatan</th>
                <th>Dibuka</th>
                <th>Ditutup</th>
                <th colspan="2">Setting</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($judul1 as $jdl) : ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $jdl['kegiatan']; ?></td>
                    <td><?php echo $jdl['dibuka']; ?></td>
                    <td><?php echo $jdl['ditutup']; ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>Home/edit_tabel/<?php echo $jdl['id']; ?>" class="badge badge-primary">edit</a>
                        <a href="<?php echo base_url() ?>Home/hapus_tabel/<?php echo $jdl['id']; ?>" class="badge badge-danger">hapus</a>
                    </td>
            </tbody>
        <?php endforeach; ?>
        </table>
    </form>
</div>