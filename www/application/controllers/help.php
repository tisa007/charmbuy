<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function step() {
		$this->load->view('help/step');
	}

	public function payment() {
		$this->load->view('help/payment');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */