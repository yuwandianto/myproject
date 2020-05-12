<div class="container-fluid">
    <h1>Setting Judul</h1>
    <hr>
    <form action="<?php echo base_url('Home/proses_ubah_judul') ?>" method="post">
        <table class="table table-bordered text-center">
            <thead>
                <th>No</th>
                <th>Judul</th>
                <th colspan="2">Setting</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($judul as $jdl) : ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $jdl['judul1']; ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>Home/edit_data/<?php echo $jdl['id']; ?>" class="badge badge-primary">edit</a>
                        <a href="<?php echo base_url() ?>Home/hapus_data/<?php echo $jdl['id']; ?>" class="badge badge-danger">hapus</a>
                    </td>
            </tbody>
        <?php endforeach; ?>
        </table>
    </form>
</div> 

