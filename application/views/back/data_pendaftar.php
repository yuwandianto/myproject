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
                        </tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nisn</th>
                        <th>Asal Sekolah</th>
                        <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pendaftar as $p) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $p['nama']; ?></td>
                                <td><?php echo $p['nisn']; ?></td>
                                <td><?php echo $p['sekolah_asal']; ?></td>
                                <td><?php echo $p['alamat_jalan']; ?></td>
                            </tr>
                    </tbody>
                <?php endforeach; ?>
                </table>


            </div>
        </div>
    </div>
</div>