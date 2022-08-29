<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Exam
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

class Exam extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $id=$_SESSION['u_id'];
    $this->db->select('status');
    $this->db->from('users');
    $this->db->where('username',$id);
    $sql=$this->db->get();
    foreach($sql->result() as $user_data)
    {
      $status=$user_data->status;
    }



    if($status==1){
      $this->load->view('header');
      $this->load->view('/exam/index');
      $this->load->view('footer');
    }
    else{
      $this->load->view('header');
      $this->load->view('/exam/exam_finish');
      $this->load->view('footer'); 
    }
 
   }
  public function exam_finish()
   {
     $this->load->view('header');
     $this->load->view('/exam/exam_finish');
     $this->load->view('footer'); 
    }

  public function submit_answer_process()
  {

   $id=$_SESSION['u_id'];


   $limit=$this->input->post('limit')-1;
   $mark=0;
   for($i=1;$i<=$limit;$i++)
   {
      
      $answer='answer'.$i;
      $o_answer=$this->input->post($answer);

      $this->db->select('*');
      $this->db->from('exam_questions');
      $this->db->where('id',$i);
      $sql=$this->db->get();
      foreach($sql->result() as $exam_check)
      {
        if($o_answer==$exam_check->answer)
        {
          $mark++;
        }
      }
      

    }
    $my_mark=($mark*10)/$limit;

    $exam_data=array('userid'=>$id,'marks'=>$my_mark);
    $this->db->insert('exam_marks',$exam_data);

    $array = array('status' => 0);
    $this->db->set($array);
    $this->db->where('username',$id);
    $this->db->update('users');
    redirect('Exam/exam_finish','refresh');

 }
 public function logout()
  {
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) 
    {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_unset();
    session_destroy();
    redirect('Main/login');
  }
}


/* End of file Exam.php */
/* Location: ./application/controllers/Exam.php */