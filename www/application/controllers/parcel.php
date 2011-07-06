<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parcel extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = 'parcel track';
		
		$this->load->view('parcel/index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */