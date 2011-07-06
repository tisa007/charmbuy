<?php
class Strings extends CI_Model {

	var $m_cache = array();

	public function __construct() {
		parent::__construct();
	}

	public function all() {
		$this->reload();
		return $this->m_cache;
	}
	
	public function read($key){
		$this->reload();
		if (array_key_exists($key, $this->m_cache)) {
			return $this->m_cache[$key];
		}
		return '';
	}

	public function write($key, $value){
		$o = $this->db->get_where('strings', array('s_key' => $key), 1, 0)->row_array();
		if (empty ($o)) {
			$this->db->insert('strings', array('s_key' => $key, 's_value' => $value));
		} else {
			$this->db->where('s_key', $key)->update('strings', array('s_value' => $value));
		}
		$this->reload();
	}

	public function add($key, $value){
		$this->db->insert('strings', array('s_key' => $key,'s_value' => $value));
		$this->reload();
	}

	public function reload($force = false) {
		if ($force || empty ($this->m_cache)) {
			$ss = $this->db->get('strings')->result_array();
			foreach ($ss as $item) {
				$this->m_cache[$item['s_key']] = $item['s_value'];
			}
		}
	}

}

/* End of file feed.php */
/* Location: ./system/application/model/feed.php */ 
