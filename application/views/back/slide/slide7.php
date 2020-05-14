<div class="container-fluid">
    <h3>Setting Slide 7</h3>


    <hr>
    <table class="table table-bordered text-center">
        <thead>
            <th>Slide7</th>
            <th>Title7</th>
            <th colspan="2">Setting</th>
        </thead>
        <tbody>
            <td><?php echo $slide7['slide7']; ?></td>
            <td><?php echo $slide7['title7']; ?></td>
            <td>
                <a href="<?php echo base_url() ?>Slide/set_slide7/<?php echo $slide7['id']; ?>" class="badge badge-primary">Edit Slide 7</a>
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
    <a href="<?php echo base_url('Home/slide6'); ?>" class="btn btn-info">Setting Slide 6</a>

</div>
</div>