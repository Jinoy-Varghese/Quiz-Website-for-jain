<style>
    .container{
        margin-top:40vh;
    }
</style>
<center class="mt-2 h2"> Admin Panel </center>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-2"></div>
        <a href="<?php echo base_url('Admin/view_participants'); ?>" class="btn btn-primary col-md-2 mr-1">View Participants</a>
        <div class="col-md-1 mt-2"></div>
        <a href="<?php echo base_url('Admin/view_marks'); ?>" class="btn btn-primary col-md-2 ml-1">View Marks</a>
        <div class="col-md-1 mt-2"></div>
        <a href="<?php echo base_url('Admin/create_exam'); ?>" class="btn btn-primary col-md-2 ml-1">Add Questions</a>
        <div class="col-md-2"></div>
    </div>
</div>