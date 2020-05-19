<div class="container-fluid" style="margin-top: 20px">
    <!-- Page Heading -->

    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b>Jadwal</b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right">
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('pesan'); ?>
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
                                <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $jadwal['id']; ?>">
                                    Edit Semua
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editmodal<?php echo $jadwal['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM EDIT JADWAL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('home/proses_edit_jadwal'); ?>

                    <input type="hidden" name="id" value="<?php echo $jadwal['id']; ?>">

                    <div class="form-group">
                        <label for="Nama Jadwal">Nama Jadwal</label>
                        <input type="text" name="nama_jadwal" class="form-control" value="<?php echo $jadwal['nama_jadwal']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" name="title_jadwal" class="form-control" value="<?php echo $jadwal['title_jadwal']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" name="ket" class="form-control" value="<?php echo $jadwal['ket']; ?>">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>

    <!-- akhir Modal Edit -->



    <br>

    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b>Tabel Jadwal</b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right"> <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahtabel">
                        Tambah Tabel Jadwal
                    </button>

        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
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
                        foreach ($tbl_jadwal as $tj) : ?>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $tj['kegiatan']; ?></td>
                            <td><?php echo $tj['dibuka']; ?></td>
                            <td><?php echo $tj['ditutup']; ?></td>
                            <td>
                                <button class="badge badge-primary" data-toggle="modal" data-target="#edittabel<?php echo $tj['id']; ?>">
                                    Edit
                                </button>
                                <a href="<?php echo base_url() ?>Home/hapus_tabel/<?php echo $tj['id']; ?>" class="badge badge-danger" onclick="return confirm ('Apakah anda yakin ?  Data akan terhapus permanent dari sistem!');">Hapus</a>
                            </td>
                    </tbody>
                <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Modal tambah -->
<div class="modal fade" id="tambahtabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH TABEL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= form_open('home/proses_tambah_tabel'); ?>

                <div class="form-group">
                    <label for="kegiatan">Kegiatan</label>
                    <input type="text" name="kegiatan" class="form-control">
                </div>

                <div class="form-group">
                    <label for="dibuka">Dibuka</label>
                    <input type="text" name="dibuka" class="form-control">
                </div>

                <div class="form-group">
                    <label for="ditutup">Ditutup</label>
                    <input type="text" name="ditutup" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<!-- Akhir Modal tambah -->


<!-- Modal Edit -->
<?php $no = 0;
foreach ($tbl_jadwal as $tj) : $no++; ?>
    <div class="modal fade" id="edittabel<?php echo $tj['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM EDIT TABEL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?= form_open('home/proses_edit_tabel'); ?>

                    <input type="hidden" name="id" value="<?php echo $tj['id']; ?>">

                    <div class="form-group">
                        <label for="kegiatan">Kegiatan</label>
                        <input type="text" name="kegiatan" class="form-control" value="<?php echo $tj['kegiatan']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="dibuka">Dibuka</label>
                        <input type="text" name="dibuka" class="form-control" value="<?php echo $tj['dibuka']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="ditutup">Ditutup</label>
                        <input type="text" name="ditutup" class="form-control" value="<?php echo $tj['ditutup']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Akhir Modal Edit -->