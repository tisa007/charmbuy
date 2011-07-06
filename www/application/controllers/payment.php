<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index()
	{
		$this->load->view('payment/index', array('title'=>'Payment'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */