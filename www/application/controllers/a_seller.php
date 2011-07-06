<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_seller extends CI_Controller {

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
		$data['title'] = 'sellers';
		$data['seller_list'] = $this->db->get('sellers')->result_array();
		$this->load->view('admin/seller', $data);
	}

	public function add(){
		$img = $this->upload_image();
		if (empty($img)) {
			redirect(site_url('a_seller'));
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[2]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('link', 'link', 'trim|required|xss_clean');
		$this->form_validation->set_rules('site', 'site', 'trim|required|xss_clean');
		if($this->form_validation->run()!=false){
			$tbuy = array(
				'name' => $this->input->post('name'),
				'link' => $this->input->post('link'),
				'site' => $this->input->post('site'),
				'img' => '/upload/'.$img['file_name']
			);
			$this->db->insert('sellers', $tbuy);
			redirect(site_url('a_seller'));
		}else{
			redirect(site_url('a_seller'));
		}
	}

	public function del() {
		$id = $this->input->get('id');
		if (! empty ($id)) {
			$this->db->delete('sellers', array('id'=>$id));
		}
		redirect(site_url('a_seller'));
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