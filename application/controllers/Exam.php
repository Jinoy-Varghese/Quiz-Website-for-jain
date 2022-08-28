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
		$this->load->view('header');
		$this->load->view('/exam/index');
		$this->load->view('footer');  }
}


/* End of file Exam.php */
/* Location: ./application/controllers/Exam.php */