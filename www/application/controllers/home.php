<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		$data['title'] = 'Welcome to Charmbuy';
		$data['ad_list'] = $this->db->get_where('ads', array(), 2, 0)->result_array();
		$data['tbuy_list'] = $this->db->order_by('order,id')->get_where('they_buy', array(), 20, 0)->result_array();

		
		$this->load->view('home/index', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */