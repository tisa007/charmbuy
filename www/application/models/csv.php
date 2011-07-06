<?php
class Csv extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->model('auth');
	}

	public function write($arr) {
		$uid = $this->auth->get_uid();
		$file_name = 'order_'.md5($uid.'_'.time()).'.csv';
		$data = $this->arr2csv($arr);
		file_put_contents('./order/'.$file_name, $data);
		return $file_name;
	}

	private function arr2csv($arr){
		if (!is_array($arr)) {
			return '';
		}
		$data = "No,Name,Shop,Price,Count,Comment,Url\n";
		foreach ($arr as $i => $a) {
			if (!is_array($a)) {
				continue;
			}
			$a = $this->trim_comma($a);
			$data .= "$i,$a[name],$a[shop],$a[price],$a[count],$a[comment],$a[url]\n";
		}
		return $data;
	}

	private function trim_comma($arr) {
		foreach ($arr as $k=>$s) {
			$arr[$k] = str_replace(',', '_', $s);
		}
		return $arr;
	}

}

/* End of file feed.php */
/* Location: ./system/application/model/feed.php */ 
