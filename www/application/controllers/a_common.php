<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_common extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('auth', 'strings'));
		if (! $this->auth->is_admin()) {
			$this->session->set_flashdata('return_url', current_url());
			redirect(site_url('account/login'));
		}
	}

	public function common() {
		$this->load->library('form_validation');
		$data['title'] = 'admin-common';
		$data['strings'] = $this->strings->all();
		$this->load->view('admin/common', $data);
	}

	public function save_main() {
		$data = array(
			'site_name' => $this->input->post('site_name'),
			'rmb_rate' => $this->input->post('rmb_rate'),
		);
		foreach ($data as $key => $value) {
			$this->strings->write($key, $value);
		}
		redirect(site_url('a_common/common'));
	}

	public function save_contact() {
		$data = array(
			'contact_qq' => $this->input->post('contact_qq'),
			'contact_msn' => $this->input->post('contact_msn'),
			'contact_skype' => $this->input->post('contact_skype'),
			'contact_email' => $this->input->post('contact_email'),
		);
		foreach ($data as $key => $value) {
			$this->strings->write($key, $value);
		}
		redirect(site_url('a_common/common'));
	}

	public function save_image() {
		$key = $this->input->post('image_key');
		$img = $this->upload_image();
		if (empty($img)) {
			redirect(site_url('a_common/common'));
		}
		$value = '/upload/'.$img['file_name'];
		$this->strings->write($key, $value);
		redirect(site_url('a_common/common'));
	}

	public function index() {
		redirect(site_url('a_common/common'));
	}

	private function upload_image() {
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '5120';
		$config['max_width']  = '1000';
		$config['max_height']  = '1000';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$data = array();
		if ($this->upload->do_upload('image')){
			$data = $this->upload->data();
		}
		return ($data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */