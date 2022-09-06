<div class="container p-lg-4 ">

    <?php 
if($this->session->flashdata('insert_success')){
 echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> New exam created.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if($this->session->flashdata('insert_failed')){
    echo '
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Failed!</strong> Something Wend wrong, please try again.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';
   }


?>


    <form class=" mt-5" method="get" action="<?php echo base_url();?>Admin/create_question">

        <div class="form-row mt-5 row">


            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Number of questions</label>
                <input type="number" class="form-control" required name="question_no">
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Count Down Time</label>
                <input type="time" class="form-control" step="any" name="time" value="00:30:15">
            </div>



        </div>
        <div class="form-row mt-4">
            <input class="btn btn-primary ml-1" type="submit" name="u_reg" value="Next">
        </div>

    </form>
</div>