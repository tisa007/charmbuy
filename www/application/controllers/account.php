<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('auth');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function reg()
	{
		$this->session->keep_flashdata('return_url');
		$this->load->library('form_validation');

	  	$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[2]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|md5');
		$this->form_validation->set_rules('email', 'email', 'trim|valid_email');
		$this->form_validation->set_rules('skype', 'skype', 'trim|valid_email');
		$this->form_validation->set_rules('msn', 'msn', 'trim|valid_email');
		if($this->form_validation->run()!=false){
			$member=array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'avatar'	=> '/upload/member/default.jpg',
				'reg_info' => json_encode(array(
					'ip' => $this->input->server('REMOTE_ADDR'),
					'time' => $this->input->server('REQUEST_TIME')
				))
			);
			$eu=$this->db->select('id')
				->get_where('members', array('name' => $member['name']), 1, 0)->row_array();
			$data['title']='reg result';
			$data['result']=false;
			if(empty($eu)){
				$data['result']=$this->db->insert('members', $member);
				$data['member_info']=$this->db->get_where('members', array('name' => $member['name']), 1, 0)->row_array();
				$this->session->set_userdata("user", $data['member_info']);
			}else{
				$data['error']='name exist';
			}
			$this->load->view('account/reg_result',$data);
		}else{
			$data['title']='member-reg';
			$this->load->view('account/reg_form',$data);
		}
	}
	public function login()
	{
		$this->session->keep_flashdata('return_url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[2]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|md5');
		if($this->form_validation->run()!=false){
			$member=array(
				'name' => $this->input->post('name'),
				'password' => $this->input->post('password'),
			);
			$eu=$this->db->get_where('members', array('name' => $member['name']), 1, 0)->row_array();
			$data['title']='login result';
			$data['result']=false;
			if(empty($eu)){
				$data['error']='name not exist';
			} elseif (strcasecmp ($eu['password'], $member['password']) != 0) {
				$data['error']='password incorrect';
			}else{
				$data['result']=true;
				$this->session->set_userdata("user", $eu);
			}
			$this->load->view('account/login_result',$data);
		} else {
			$data['title']='login page';
			$this->load->view('account/login_form',$data);
		}
	}

	public function logout(){
		$this->session->set_userdata("user", null);
		redirect(site_url('home/index'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */