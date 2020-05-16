<div class="container-fluid" style="margin-top: 20px">
    <!-- Page Heading -->

    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b><?php echo $title; ?></b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right">
        </div>
        <div class="card-body">
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
                            <a href="<?php echo base_url() ?>Home/edit_berita/<?php echo $berita['id']; ?>" class="badge badge-primary">edit</a>
                        </td>
                    </tbody>
                </table>
                </form>

            </div>
        </div>
    </div>

    <br>
    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b>isi berita</b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right"> <a href="<?php echo base_url('Home/tambah_isib') ?>" class="btn btn-primary float-right">Tambah</a>
        </div>
        <div class="card-body">
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
                                <a href="<?php echo base_url() ?>Home/edit_isiberita/<?php echo $b['id']; ?>" class="badge badge-primary">edit</a>
                                <a href="<?php echo base_url() ?>Home/hapus_isib/<?php echo $b['id']; ?>" class="badge badge-danger">hapus</a>
                            </td>
                    </tbody>
                <?php endforeach; ?>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>