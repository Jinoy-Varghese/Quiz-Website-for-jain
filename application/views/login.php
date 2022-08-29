<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    html,
body {
  height: 100%;
  overflow-x:hidden;
}

body {
  /*display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background:url("<?php echo base_url('assets/image/login_g.jpg'); ?>");
  background-repeat:no-repeat;
  background-size:cover;
 */
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
  z-index:4;
  
}
.form-signin .checkbox {
  font-weight: 400;
  
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;

}


</style>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<?php 

if($this->session->flashdata('invalid_user')){
 echo '
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <strong>Login failed!</strong> Invalid User ID or Password.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<div class="col-12 mt-2 pl-3">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('Main/'); ?>"><i class="fas fa-arrow-left"></i></a></div>
<?php echo form_open('Main/login_process','class="form-signin text-center"'); ?>
<div class="mt-5">
      <img class="mb-2" src="<?php echo base_url('assets/image/jain_logo.png'); ?>" alt="" width="170" height="170" />
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <input type="email" name="u_name" class="form-control" placeholder="Email address" required autofocus>
      <input type="password" name="u_password" class="form-control" placeholder="Password" required>

      <input class="btn btn-lg btn-primary btn-block w-100 mt-3" type="submit" value="Sign in" name="u_login">




    </div>
     
<?php echo form_close(); ?>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



