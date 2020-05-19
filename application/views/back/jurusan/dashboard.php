<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
    <!-- Page Heading -->


    <!-- DataTables -->


    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <class="m-0 font-weight-bold text-primary">
                <font color="green"><b> Real <?php echo $title; ?></b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right">
                    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahdata_kelas"><i class="fas fa-plus fa-sm"></i> Tambah Data Kelas</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jurusan</th>
                            <th style="width: 125px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($jrs  as $j) :
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $j['jurusan']; ?></td>
                                <td>
                                    <button class="badge badge-primary mb-3" data-toggle="modal" data-target="#editdata_kelas<?php echo $j['id']; ?>">Edit</button>

                                    <a href="<?= base_url(); ?>Jurusan/hapus/<?= $j['id']; ?>" class="badge badge-danger" onclick="return confirm ('Apakah anda yakin ?  Data akan terhapus permanent dari sistem!');">Hapus</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>


<!-- Tambah Data Pakai Modal -->

<!-- Modal -->

<div class="modal fade" id="tambahdata_kelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA KELAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('jurusan/proses_tambah'); ?>

                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" required="" placeholder="Contoh : Rekayasa Perangkat Lunak">
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Modal edit -->
<?php $no = 0;
foreach ($jrs as $j) : $no++; ?>
    <div class="modal fade" id="editdata_kelas<?php echo $j['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA KELAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('jurusan/proses_edit'); ?>

                    <input type="hidden" name="id" value="<?php echo $j['id'] ?>" class="form-control">



                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" required="" placeholder="Contoh : Rekayasa Perangkat Lunak" value="<?php echo $j['jurusan']; ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>