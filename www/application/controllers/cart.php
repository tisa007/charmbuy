<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('auth');
		$this->load->model('cart_model');
		if (! $this->auth->has_login()) {
			$this->session->set_flashdata('return_url', site_url('cart/index'));
			redirect(site_url('account/login'));
		}
	}
	
	public function index(){
		$data['title'] = 'shop cart of charmbuy';
		$data['product_list'] = $this->cart_model->get_list();

		$this->load->view('cart/index', $data);
	}

	public function add(){
		$this->load->model('parser');
		$url=$this->input->post('url');
		$product = $this->parser->parse($url);
		if (!empty ($product))
			$this->cart_model->save($product);
		else
			$this->session->set_flashdata('msg', 'parse failed,please check the url!');
		redirect(site_url('cart/index'));
	}

	public function clear() {
		$this->cart_model->clear();
		redirect(site_url('cart/index'));
	}

	public function next() {
		$data['title'] = 'shop cart of charmbuy';
		$ids = $this->input->post('ids');
		if (empty ($ids)){
			$this->session->set_flashdata('msg', 'you have no products choosed!');
			redirect(site_url('cart/index'));
		}
		$product_list = array();
		foreach ($ids as $id) {
			$p = array(
				'name' => $this->input->post($id.'_name'),
				'url' => $this->input->post($id.'_url'),
				'shop' => $this->input->post($id.'_shop'),
				'price' => $this->input->post($id.'_price'),
				'count' => $this->input->post($id.'_count'),
				'comment' => $this->input->post($id.'_comment'),
			);
			$this->cart_model->remove($p['url']);
			$product_list[] = $p;
		}
		$data['product_list'] = $product_list;

		$this->load->model('csv');
		$fn = $this->csv->write($product_list);
		$user = $this->auth->get_user();
		$mail = array(
			'flink' => site_url().'/order/'.$fn,
			'title' => 'order from '.$user['name'],
			'body' => 'helelo'
		);
		$this->mail($mail);
		
		$this->load->view('cart/next', $data);
	}

	private function mail($mail) {
		$this->load->library('email');
		$this->email->from('tisa007@163.com', 'wangpan');
		$this->email->to('tisa007@qq.com');
		$this->email->subject($mail['title']);
		$this->email->message($mail['body']."\n".$mail['flink']);
		$this->email->send();
		echo $this->email->print_debugger();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */