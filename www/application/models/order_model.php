<?php
class Order_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->model('auth');
	}
	
	public function save($products) {
		$uid = $this->auth->get_uid();
		$order = array(
			'user_id' => $uid,
			'timeline' => time(),
			'product_count' => count($products),
			'products' => json_encode($products)
		);
		$this->db->insert('orders', $order);
	}

	public function update($id, $order) {
		$this->db->where('id', $id)->update($order);
	}

	public function get_list() {
		$user_id = $this->auth->get_uid();
		$orders = $this->db->get_where('orders', array('user_id' => $user_id), 100, 0)->result_array();
		if (empty ($orders)) {
			$orders = array();
		}
		foreach ($orders as $key => $value) {
			$orders[$key]['products'] = json_decode($value['products'], true);
		}
		return $orders;
	}

}

/* End of file feed.php */
/* Location: ./system/application/model/feed.php */ 
