<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
    <!-- Page Heading -->

    <head>
        <!-- DataTables -->


        <div class="card shadow mb-4 card-responsive">
            <div class="card-header py-3">
                <class="m-0 font-weight-bold text-primary">
                    <font color="green"><b> Real <?php echo $title; ?></b></font>
                    <h6 class="m-0 font-weight-bold text-primary float-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
                            Tambah Data
                        </button>
            </div>
            <div class="card-body">
                <?php echo $this->session->flashdata('pesan'); ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>judul</th>
                                <th>Text</th>
                                <th>Gambar</th>
                                <th style="width: 125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            foreach ($slide  as $s) :
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $s['judul']; ?></td>
                                    <td><?php echo $s['text']; ?></td>
                                    <td><img src="<?php echo base_url() . '/assets/images/' . $s['gambar']; ?>" alt="..." height="70">
                                    <td>
                                        <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $s['id']; ?>">
                                            Edit
                                        </button>

                                        <a href="<?php echo base_url() ?>Slide/hapus_slide/<?php echo $s['id']; ?>" class="badge badge-danger" onclick="return confirm ('Apakah anda yakin ?  Data akan terhapus permanent dari sistem!');">Hapus</a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>



<!-- Button trigger modal -->


<!-- Modal Tambah -->
<div class=" modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH SLIDE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Slide/proses_tambah_slide') ?>

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" required="" placeholder="masukkan judul">
                </div>

                <div class="form-group">
                    <label>Text</label>
                    <input type="text" name="text" class="form-control" required="" placeholder="masukkan text">
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="userfile" class="form-control" required="">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Edit -->
<?php $no = 0;
foreach ($slide as $s) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $s['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM EDIT SLIDE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('Slide/proses_edit_slide') ?>

                    <input type="hidden" name="id" value="<?php echo $s['id']; ?>">


                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required="" placeholder="masukkan judul" value="<?php echo $s['judul']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Text</label>
                        <input type="text" name="text" class="form-control" required="" placeholder="masukkan text" value="<?php echo $s['text']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="userfile" size="20" class="form-control">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <img src="<?php echo base_url() . '/assets/images/' . $s['gambar']; ?>" alt="" width="70">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>