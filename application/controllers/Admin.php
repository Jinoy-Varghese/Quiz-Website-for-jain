<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Admin
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('header');
		$this->load->view('/admin/index');
		$this->load->view('footer');
  }
  public function view_marks()
  {
    $this->load->view('header');
		$this->load->view('/admin/view_marks');
		$this->load->view('footer');
  }
  public function view_participants()
  {
    $this->load->view('header');
		$this->load->view('/admin/view_participants');
		$this->load->view('footer');
  }
  public function create_exam()
  {
    $this->load->view('header');
		$this->load->view('/admin/create_exam');
		$this->load->view('footer');
  }
  public function create_question()
  {
    $this->load->view('header');
		$this->load->view('/admin/create_question');
		$this->load->view('footer');
  }
  public function create_question_process()
  {

    $id=$_SESSION['u_id'];

    
    $limit=$this->input->post('limit');
    $time=$this->input->post('time');


    for($i=1;$i<=$limit;$i++)
    {

       $question='question'.$i;
       $optiona='optiona'.$i;
       $optionb='optionb'.$i;
       $optionc='optionc'.$i;
       $optiond='optiond'.$i;
       $answer='answer'.$i;
       
       $o_question=$this->input->post($question);
       $o_optiona=$this->input->post($optiona);
       $o_optionb=$this->input->post($optionb);
       $o_optionc=$this->input->post($optionc);
       $o_optiond=$this->input->post($optiond);
       $o_answer=$this->input->post($answer);

      $imgc="image".$i;

       $image = $_FILES[$imgc]['name'];
       $target = "assets/image/q_pic/".basename($image);
       move_uploaded_file($_FILES[$imgc]['tmp_name'], $target);

       $exam_data=array('question'=>$o_question,'option_a'=>$o_optiona,'option_b'=>$o_optionb,'option_c'=>$o_optionc,'option_d'=>$o_optiond,'answer'=>$o_answer,'time'=>$time,'pic'=>$target);
       $this->db->insert('exam_questions',$exam_data);
    }
    $this->session->set_flashdata('insert_success',"Sucessfully inserted");
    redirect('Admin/','refresh');

  }


}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */