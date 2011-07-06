<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_message extends CI_Controller {

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
		$data['title'] = 'messages';
		$page = (int)$this->input->get('page');
		$replied = $this->input->get('replied');
		$visible = $this->input->get('visible');

		$where = array();
		if(!empty ($replied)){
			$where['has_replied'] = (int)$replied;
		}
		if(!empty ($visible)){
			$where['is_visible'] = (int)$visible;
		}
		$data['message_list'] = $this->db->get_where('messages', $where, 30, $page*30)->result_array();
		$this->load->view('admin/message', $data);
	}

	public function reply() {
		$id = $this->input->get('id');
		$user = $this->auth->get_user();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('content', 'content', 'trim|required|min_length[3]|max_length[200]|xss_clean');
		if($this->form_validation->run()!=false){
			$message = array(
				'has_replied' => '1',
				'reply_uid' => $user['id'],
				'reply_uname' => $user['name'],
				'reply_content' => $this->input->post('content'),
				'reply_timeline' => time(),
			);
			$this->db->where('id', $id)->update('messages', $message);
			$this->session->set_flashdata('msg', 'reply success');
			redirect(site_url('a_message'));
		} else {
			$id = $this->input->get('id');
			$data['message'] = $this->db->get_where('messages', array('id'=>$id))->row_array();
			$data['title'] = 'message';
			$this->load->view('admin/message_reply', $data);
		}
	}

	public function hide() {
		$id = $this->input->get('id');
		if (! empty ($id)) {
			$this->db->where('id', $id)->update('messages', array('is_visible'=>'-1'));
		}
		redirect(site_url('a_message'));
	}
	public function show() {
		$id = $this->input->get('id');
		if (! empty ($id)) {
			$this->db->where('id', $id)->update('messages', array('is_visible'=>'1'));
		}
		redirect(site_url('a_message'));
	}

	public function delete() {
		$id = $this->input->get('id');
		if (! empty ($id)) {
			$this->db->delete('messages', array('id'=>$id));
		}
		redirect(site_url('a_message'));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */