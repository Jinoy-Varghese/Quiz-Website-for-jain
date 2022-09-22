<div class="container p-lg-4 ">
    <form class=" mt-5" method="post" action="<?php echo base_url();?>Admin/create_question_process" enctype="multipart/form-data">


        <input type="hidden" name="limit" value="<?php echo $_GET['question_no'] ?>">
        <input type="hidden" name="time" value="<?php echo $_GET['time'] ?>">


        <?php
for($i=1;$i<=$_GET['question_no'];$i++)
{

?>
        <div class="form-row mt-5 row">

            <div class="mt-2 h5 p-0" style="width:10px;"> <?php echo $i ?>.</div> 
            <div class="col-11">
                <input required type="text" class="col-12 form-control" placeholder="Enter your question"
                    name="question<?php echo $i ?>">
                    <div class="col mt-4 row">
                        <div class="col-3">Upload Image
                            <span class="text-danger">(optional)  </span>: 
                            
                        </div>
                        <div class="col-9 form-group">
                            <input type="file" name="image<?php echo $i ?>" id="image<?php echo $i ?>" class="form-control" > 
                        </div>
                    </div>
            </div>

            <div class="col-md-5 ml-4 mt-3"><input required type="text" name="optiona<?php echo $i ?>"
                    class="form-control" placeholder="Option 1"></div>
            <div class="col-md-5 ml-4 mt-3"><input required type="text" name="optionb<?php echo $i ?>"
                    class="form-control" placeholder="Option 2"></div>
            <div class="col-md-5 ml-4 mt-3"><input required type="text" name="optionc<?php echo $i ?>"
                    class="form-control" placeholder="Option 3"></div>
            <div class="col-md-5 ml-4 mt-3"><input required type="text" name="optiond<?php echo $i ?>"
                    class="form-control" placeholder="Option 4"></div>

            <div class="mt-5 h5 ml-md-4 mb-md-3"> Choose the correct answer : </div>
            <div class="col-md-3">
                <select required type="text" class="col-12 form-control" style="height:35px;"
                    name="answer<?php echo $i ?>">
                    <option disabled selected>select</option>
                    <option value="A">Option 1</option>
                    <option value="B">Option 2</option>
                    <option value="C">Option 3</option>
                    <option value="D">Option 4</option>
                </select>
            </div>
        </div>

        <?php
}
?>

<div class="form-row mt-4 col-12 p-0 ">
            <input class="btn btn-primary ml-md-4 mb-5 col-md-2 col-12  mt-5" type="submit" name="u_reg" value="Add Questions">
        </div>

    </form>
</div>
