<div class="container-fluid">
    <h3>Setting Slide 2</h3>


    <hr>
    <table class="table table-bordered text-center">
        <thead>
            <th>Slide2</th>
            <th>Title2</th>
            <th colspan="2">Setting</th>
        </thead>
        <tbody>
            <td><?php echo $slide2['slide2']; ?></td>
            <td><?php echo $slide2['title2']; ?></td>
            <td>
                <a href="<?php echo base_url() ?>Slide/set_slide2/<?php echo $slide2['id']; ?>" class="badge badge-primary">Edit Slide 2</a>
            </td>
        </tbody>
    </table>
    </form>
    <br>
    <br>
    <br>
    <br>
    <a href="<?php echo base_url('Home/slide'); ?>" class="btn btn-primary">Setting Slide 1</a>
    <a href="<?php echo base_url('Home/slide3'); ?>" class="btn btn-warning">Setting Slide 3</a>
    <a href="<?php echo base_url('Home/slide4'); ?>" class="btn btn-danger">Setting Slide 4</a>
    <a href="<?php echo base_url('Home/slide5'); ?>" class="btn btn-dark">Setting Slide 5</a>
    <a href="<?php echo base_url('Home/slide6'); ?>" class="btn btn-info">Setting Slide 6</a>
    <a href="<?php echo base_url('Home/slide7'); ?>" class="btn btn-secondary">Setting Slide 7</a>

</div>
</div>