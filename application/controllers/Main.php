<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function login()
	{
	  $this->load->view("header");
	  $this->load->view("login");
	  $this->load->view("footer");
	}
	public function logout()
	{
	  session_unset();
	  session_destroy();
	  redirect('Main/login');
	}
	public function login_process()
   {
     if($this->input->post('u_login'))
      {
        $username=$this->input->post('u_name');
        $password=md5($this->input->post('u_password'));
        $u_data=array('u_name'=>$username,'u_pass'=>$password);
        $users_list=$this->db->get_where('users',array('username'=>$u_data['u_name']));
        if($users_list->num_rows()>0)
        {
          foreach($users_list->result() as $users)
          {
            if($u_data['u_name']==$users->username && $u_data['u_pass']==$users->password)
            {
              $_SESSION['u_id']=$u_data['u_name'];
              $_SESSION['role']=$users->role;
              if($users->role=="admin")
              {
              redirect('Admin','refresh');
              }
              
              elseif($users->role=="student")
              {
              redirect('Exam','refresh');
              }
            }
            else
            {
              $this->session->set_flashdata('invalid_user',"failed");
              redirect('Main/login','refresh');
            }
          }
        }
        else
            {
              $this->session->set_flashdata('invalid_user',"failed");
              redirect('Main/login','refresh');
            }
      }
   }
}
