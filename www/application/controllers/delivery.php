<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delivery extends CI_Controller {

	public function index()
	{
		$this->load->view('delivery/index', array('title'=>'Delivery'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */