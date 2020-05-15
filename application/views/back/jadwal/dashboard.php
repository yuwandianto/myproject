<div class="container-fluid" style="margin-top: 20px">
    <!-- Page Heading -->

    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b>Jadwal</b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama Jadwal</th>
                            <th>Title</th>
                            <th>Keterangan</th>
                            <th colspan="2">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $jadwal['nama_jadwal']; ?></td>
                            <td><?php echo $jadwal['title_jadwal']; ?></td>
                            <td><?php echo $jadwal['ket']; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>Home/edit_data/<?php echo $jadwal['id']; ?>" class="badge badge-primary">Edit Semua</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <br>

    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b>Tabel Jadwal</b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right"> <a href="<?php echo base_url('Home/tambah_tabel') ?>" class="btn btn-primary float-right">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered" cellspacing="0">
                    <thead class="thead-dark">
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
              
            </div>
        </div>
    </div>
</div>