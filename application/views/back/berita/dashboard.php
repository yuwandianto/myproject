<div class="container-fluid" style="margin-top: 20px">
    <!-- Page Heading -->

    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b><?php echo $title; ?></b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right">
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="table-responsive">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <th>Nama Berita</th>
                        <th>Title</th>
                        <th colspan="2">Setting</th>
                    </thead>
                    <tbody>

                        <td><?php echo $berita['nama_berita']; ?></td>
                        <td><?php echo $berita['title_berita']; ?></td>
                        <td>
                            <button class="badge badge-sm btn-primary mb-3" data-toggle="modal" data-target="#editdata<?php echo $berita['id']; ?>"></i> Edit data</button>
                        </td>
                    </tbody>
                </table>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editdata<?php echo $berita['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA BERITA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('home/proses_edit_berita'); ?>

                    <input type="hidden" name="id" value="<?php echo $berita['id']; ?>">

                    <div class="form-group">
                        <label>Nama Berita</label>
                        <input type="text" name="nama_berita" class="form-control" required="" placeholder="" value="<?php echo $berita['nama_berita'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Title Berita</label>
                        <input type="text" name="title_berita" class="form-control" required="" placeholder="" value="<?php echo $berita['title_berita']; ?>">
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
    <!-- akhir Modal Edit -->

    <br>
    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b>isi berita</b></font>
                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahdata"></i> Tambah Data</button>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table text-center table-bordered" cellspacing="0">
                    <thead class="thead-dark">
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
                                <button class="badge badge-primary" data-toggle="modal" data-target="#editisib<?php echo $b['id']; ?>"></i>Edit</button>


                                <a href="<?php echo base_url() ?>Home/hapus_isib/<?php echo $b['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin hapus? Data akan terhapus permanent dari sistem!')">hapus</a>
                            </td>
                    </tbody>
                <?php endforeach; ?>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah -->


<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH ISI BERITA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('home/proses_tambah_isib'); ?>

                <div class="form-group">
                    <label>Isi Berita</label>
                    <input type="text" name="berita" class="form-control" required="" placeholder="masukkan isi berita">
                </div>

                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control" required="" placeholder="masukkan link">
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
<!-- akhir Modal tambah -->


<!-- Modal Edit -->
<?php $no = 0;
foreach ($isi_berita as $b) : $no++; ?>
    <div class="modal fade" id="editisib<?php echo $b['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM EDIT ISI BERITA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('Home/proses_edit_isib'); ?>

                    <input type="hidden" name="id" value="<?php echo $b['id']; ?>">

                    <div class="form-group">
                        <label>Isi Berita</label>
                        <input type="text" name="berita" class="form-control" required="" placeholder="masukkan isi berita" value="<?php echo $b['berita']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" class="form-control" required="" placeholder="masukkan link" value="<?php echo $b['link']; ?>">
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
<!-- Akhir Modal Edit -->