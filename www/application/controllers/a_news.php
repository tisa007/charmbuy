<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_news extends CI_Controller {

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
		$data['title'] = 'news';
		$data['news_list'] = $this->db->get('news')->result_array();
		$this->load->view('admin/news', $data);
	}

	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'trim|required|min_length[2]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('content', 'content', 'trim|required|xss_clean');
//		$this->form_validation->set_rules('before', 'before', 'trim|required|xss_clean');
//		$this->form_validation->set_rules('after', 'after', 'trim|required|xss_clean');
		if($this->form_validation->run()!=false){
			$bf = strtotime($this->input->post('before'));
			$af = strtotime($this->input->post('after'));
			if ($af < 1){
				$af = time();
			}
			if ($bf < time()) {
				$bf = time() + 60*60*24*7;
			}
			$tbuy = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'before' => $bf,
				'after' => $af,
				'timeline' => time(),
			);
			$this->db->insert('news', $tbuy);
			redirect(site_url('a_news'));
		}else{
			redirect(site_url('a_news'));
		}
	}

	public function delete() {
		$id = $this->input->get('id');
		if (! empty ($id)) {
			$this->db->delete('news', array('id'=>$id));
		}
		redirect(site_url('a_news'));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */