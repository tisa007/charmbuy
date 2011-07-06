<?php
class Cart_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->model('auth');
	}
	
	public function save($product) {
		$uid = $this->auth->get_uid();
		$cart = $this->get_my_cart($uid);
		$products = json_decode($cart['products'], true);
		if (is_array($products) &&in_array($product, $products)) {
			return;
		}
		$products[] = $product;
		$cart['products'] = json_encode($products);
		$this->db->where('user_id', $uid)->update('shopcarts', $cart);
	}

	public function clear(){
		$user_id = $this->auth->get_uid();
		$cart = $this->db->get_where('shopcarts', array('user_id' => $user_id), 1, 0)->row_array();
		if (! empty ($cart)) {
			$cart['products'] = json_encode(array());
			$this->db->where('user_id', $user_id)->update('shopcarts', $cart);
		}
	}

	public function remove($url) {
		$user_id = $this->auth->get_uid();
		$cart = $this->db->get_where('shopcarts', array('user_id' => $user_id), 1, 0)->row_array();
		if (! empty ($cart)) {
			$products = json_decode($cart['products'], true, 3);
			foreach ($products as $key => $value) {
				if (strcasecmp($url, $value['url']) == 0) {
					unset ($products[$key]);
				}
			}
			$cart['products'] = json_encode($products);
			$this->db->where('user_id', $user_id)->update('shopcarts', $cart);
		}
	}

	public function get_list() {
		$user_id = $this->auth->get_uid();
		$cart = $this->db->get_where('shopcarts', array('user_id' => $user_id), 1, 0)->row_array();
		if (empty ($cart)) {
			return array();
		} else {
			$temp = json_decode($cart['products'], true, 3);
			return $temp==null?array():$temp;
		}
	}

	public function get_list_by_urls($urls) {
		$user_id = $this->auth->get_uid();
		$cart = $this->db->get_where('shopcarts', array('user_id' => $user_id), 1, 0)->row_array();
		if (empty ($cart)) {
			return array();
		} else {
			$temp = json_decode($cart['products'], true, 3);
			if (empty ($temp)) $temp = array();
			foreach ($temp as $k => $p) {
				if (! in_array($p['url'], $urls)) {
					unset ($temp[$k]);
				}
			}
			return $temp;
		}
	}

	private function get_my_cart($user_id) {
		$cart = $this->db->get_where('shopcarts', array('user_id' => $user_id), 1, 0)->row_array();
		if (empty ($cart)) {
			$new_cart = array(
				'user_id' => $user_id
			);
			$this->db->insert('shopcarts', $new_cart);
		}
		$cart = $this->db->get_where('shopcarts', array('user_id' => $user_id), 1, 0)->row_array();
		if (empty ($cart)) { die('system error! cannot initialize shop cart!'); }
		return $cart;
	}

}

/* End of file feed.php */
/* Location: ./system/application/model/feed.php */ 
