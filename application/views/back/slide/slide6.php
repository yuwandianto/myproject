<div class="container-fluid">
    <h3>Setting Slide 6</h3>


    <hr>
    <table class="table table-bordered text-center">
        <thead>
            <th>Slide6</th>
            <th>Title6</th>
            <th colspan="2">Setting</th>
        </thead>
        <tbody>
            <td><?php echo $slide6['slide6']; ?></td>
            <td><?php echo $slide6['title6']; ?></td>
            <td>
                <a href="<?php echo base_url() ?>Slide/set_slide6/<?php echo $slide6['id']; ?>" class="badge badge-primary">Edit Slide 6</a>
            </td>
        </tbody>
    </table>
    </form>
    <br>
    <br>
    <br>
    <br>
    <a href="<?php echo base_url('Home/slide'); ?>" class="btn btn-primary">Setting Slide 1</a>
    <a href="<?php echo base_url('Home/slide2'); ?>" class="btn btn-success">Setting Slide 2</a>
    <a href="<?php echo base_url('Home/slide3'); ?>" class="btn btn-warning">Setting Slide 3</a>
    <a href="<?php echo base_url('Home/slide4'); ?>" class="btn btn-danger">Setting Slide 4</a>
    <a href="<?php echo base_url('Home/slide5'); ?>" class="btn btn-dark">Setting Slide 5</a>
    <a href="<?php echo base_url('Home/slide7'); ?>" class="btn btn-secondary">Setting Slide 7</a>

</div>