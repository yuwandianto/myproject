<div class="container-fluid" style="margin-top: 20px">
    <!-- Page Heading -->

    <div class="card shadow mb-4 card-responsive">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center text-uppercase">
                <font color="green"><b>DATA SEKOLAH</b></font>
                <h6 class="m-0 font-weight-bold text-primary float-right">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        </tr>
                        <th>No</th>
                        <th>Nama Sekolah</th>
                        <th>Alamat</th>
                        <th>Email Sekolah</th>
                        <th>Telp Sekolah</th>
                        <th>Logo</th>
                        <th colspan="2">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($sekolah as $s) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $s['nama_sekolah']; ?></td>
                                <td><?php echo $s['alamat']; ?></td>
                                <td><?php echo $s['email_sekolah']; ?></td>
                                <td><?php echo $s['tlp_sekolah']; ?></td>
                                <td><img src="<?php echo base_url() . '/assets/images/' . $s['logo']; ?>" alt="" width="100"></td>
                                <td>
                                    <a href="<?php echo base_url() ?>Home/edit_sekolah/<?php echo $s['id']; ?>" class="badge badge-primary">Edit</a>
                                </td>
                            </tr>
                    </tbody>
                <?php endforeach; ?>
                </table>


            </div>
        </div>
    </div>
</div>