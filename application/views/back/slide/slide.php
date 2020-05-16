<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
    <!-- Page Heading -->

    <head>
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
        <!-- DataTables -->


        <div class="card shadow mb-4 card-responsive">
            <div class="card-header py-3">
                <class="m-0 font-weight-bold text-primary">
                    <font color="green"><b> Real <?php echo $title; ?></b></font>
                    <h6 class="m-0 font-weight-bold text-primary float-right">
                        <a href="<?php echo base_url('slide/tambah_slide'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
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
                                        <a href="<?php echo base_url() ?>Slide/edit_slide/<?php echo $s['id']; ?>" class="badge badge-primary">Edit</a>

                                        <a href="<?php echo base_url() ?>Slide/hapus_slide/<?php echo $s['id']; ?>" class="badge badge-danger">Hapus</a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>