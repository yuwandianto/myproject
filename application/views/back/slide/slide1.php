<div class="container-fluid">
    <h3>Setting Slide 1</h3>


    <hr>
    <table class="table table-bordered text-center">
        <thead>
            <th>Slide1</th>
            <th>Title1</th>
            <th colspan="2">Setting</th>
        </thead>
        <tbody>
            <td><?php echo $slide1['slide1']; ?></td>
            <td><?php echo $slide1['title1']; ?></td>
            <td>
                <a href="<?php echo base_url() ?>Slide/set_slide1/<?php echo $slide1['id']; ?>" class="badge badge-primary">Edit Slide 1</a>
            </td>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <a href="<?php echo base_url('Home/slide2'); ?>" class="btn btn-success">Setting Slide 2</a>
    <a href="<?php echo base_url('Home/slide3'); ?>" class="btn btn-warning">Setting Slide 3</a>
    <a href="<?php echo base_url('Home/slide4'); ?>" class="btn btn-danger">Setting Slide 4</a>
    <a href="<?php echo base_url('Home/slide5'); ?>" class="btn btn-dark">Setting Slide 5</a>
    <a href="<?php echo base_url('Home/slide6'); ?>" class="btn btn-info">Setting Slide 6</a>
    <a href="<?php echo base_url('Home/slide7'); ?>" class="btn btn-secondary">Setting Slide 7</a>

</div>