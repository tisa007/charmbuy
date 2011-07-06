<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E3steps extends CI_Controller {

	public function index()
	{
		$this->load->view('e3steps/index', array('title'=>'Easy 3 steps'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */