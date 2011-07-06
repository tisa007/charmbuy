<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qanda extends CI_Controller {

	public function index()
	{
		$this->load->view('qanda/index', array('title'=>'Q&A'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */