<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seller extends CI_Controller {

	public function index()
	{
		redirect(site_url('seller/taobao'));
	}

	public function taobao() {
		$data['title'] = 'taobao sellers';
		$data['seller_list'] = $this->db->order_by('order')->get_where('sellers', array())->result_array();
		$this->load->view('seller/index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */