<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('auth', 'strings'));
		if (! $this->auth->is_admin()) {
			$this->session->set_flashdata('return_url', current_url());
			redirect(site_url('account/login'));
		}
	}

	public function index() {
		$data['title'] = 'admin-member';
		$data['strings'] = $this->strings->all();
		$this->load->view('admin/a_member', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */