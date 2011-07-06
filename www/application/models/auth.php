<?php
class Auth extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	function has_login()
	{
		$user=$this->session->userdata('user');
		return !empty ($user);
	}

	function get_uid()
	{
		$user=$this->session->userdata('user');
		return empty ($user)? 0:$user['id'];
	}

	function get_user()
	{
		$user=$this->session->userdata('user');
		return $user;
	}

	function is_admin() {
		$user=$this->session->userdata('user');
		return ! empty($user['is_admin']);
	}

}

/* End of file feed.php */
/* Location: ./system/application/model/feed.php */ 
