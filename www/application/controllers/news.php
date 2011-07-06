<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		redirect(site_url('home'));
	}

	public function view() {
		$id = $this->input->get('id');
		$data['title'] = 'charmbuy news';
		$data['news'] = $this->db->get_where('news', array('id'=> $id))->row_array();
		if (empty ($data['news'])) {
			$this->session->set_flashdata('msg', 'not found that news');
			redirect(site_url('home'));
		}
		$this->load->view('news/view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */