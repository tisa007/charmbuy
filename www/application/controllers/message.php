<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('auth');
		if (! $this->auth->has_login()) {
			$this->session->set_flashdata('return_url', current_url());
			redirect(site_url('account/login'));
		}
	}

	public function index() {
		redirect(site_url('message/mine'));
	}

	public function all() {
		$data['title'] = 'Welcome to Charmbuy';
		$data['message_list'] = $this->db->get_where('messages', array(), 100, 0)->result_array();
		$this->load->view('message/all', $data);
	}

	public function mine() {
		$uid = $this->auth->get_uid();
		$data['message_list'] = $this->db->get_where('messages', array('user_id'=>$uid), 100, 0)->result_array();

		$user = $this->auth->get_user();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('content', 'content', 'trim|required|min_length[3]|max_length[200]|xss_clean');
		if($this->form_validation->run()!=false){
			$message = array(
				'user_id' => $user['id'],
				'user_name' => $user['name'],
				'content' => $this->input->post('content'),
				'timeline' => time(),
				'user_ip' => $this->input->server('REMOTE_ADDR')
			);
			$this->db->insert('messages', $message);
			$this->session->set_flashdata('msg', 'msg sent success, we will reply in 48 hours.');
			$this->load->view('message/mine', $data);
		} else {
			$data['title'] = 'leave a message';
			$this->load->view('message/mine', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */