<style>
    .container{
        margin-top:40vh;
    }
</style>
<center class="mt-2 h2"> Admin Panel </center>

<div class="container">
    <div class="row d-flex justify-content-center mb-4">
        
        <a href="<?php echo base_url('Admin/view_participants'); ?>" class="btn btn-primary col-md-2 mr-1">View Participants</a>
        <div class="col-2"></div>
        <a href="<?php echo base_url('Admin/view_marks'); ?>" class="btn btn-primary col-md-2 ml-1">View Marks</a>

    </div>

    <div class="row d-flex justify-content-center">
        
    <a href="<?php echo base_url('Admin/create_exam'); ?>" class="btn btn-primary col-md-2 ml-1">Add Questions</a>
    <div class="col-2"></div>
    <a href="<?php echo base_url('Admin/view_questions'); ?>" class="btn btn-primary col-md-2 ml-1">View Questions</a>

    </div>


</div>