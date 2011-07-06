<?php
class Parser extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->helper('simple_html');
	}

	public function parse($url) {
		$seg = parse_url($url);
		if (empty($seg['host'])) {
			return array();
		}
		switch ($seg['host']) {
			case "www.vancl.com":
			case "item.vancl.com":
				$product = $this->parseVancl($url);
				break;
			case "item.taobao.com":
				$product = $this->parseTaobao($url);
				break;
			case "item.tmall.com":
				$product = $this->parseTmall($url);
				break;
			case "auction1.paipai.com":
				$product = $this->parsePaipai($url);
				break;
			case "lingerie.moonbasa.com":
				$product = $this->parseMoonbasa($url);
				break;
			case "product.m18.com":
				$product = $this->parseM18($url);
				break;
			case "www.360buy.com":
				$product = $this->parse360($url);
				break;
		 default:
			return array();
		}
		$product['count'] = 1;
		$product['comment'] = '';
		if (empty($product['name'])) {
			return array();
		}
		return $product;
	}
	
	private function parseVancl($url) {
		$f_enc="utf8";
		$t_enc="utf8";
		
		ini_set('user_agent','Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3');
		
		$page = file_get_html($url);
		$product['title'] = $this->s_read($page, "title");
		$part = $page->find('div#pricearea', 0);
		if (empty ($part)) {
			return null;
		}
		$product['name'] = $this->s_read($part, "h2");
		$product['price'] = $this->s_read($part, "div.cuxiaoPrice strong");
		$product['shop'] = 'vancl.com';
		$product['url'] = $url;

		$product = $this->arr_convert($product, $f_enc, $t_enc);
		return $product;
	}

	private function parseTaobao($url) {
		$f_enc="gbk";
		$t_enc="utf8";
		$page = file_get_html($url);
		$product['title'] = $this->s_read($page, "title");
		$part = $page->find('div#detail', 0);
		if (empty ($part)) {
			return null;
		}

		$product['name'] = $this->s_read($part, "h3");
		$product['price'] = $this->s_read($part, "*#J_StrPrice");
		$prom_price = $this->s_read($part, "*#J_SpanLimitProm");
		if (!empty ($prom_price)) {
			$product['price'] = $prom_price;
		}
		$product['shop'] = $this->s_read($page, "div#shop-info a.hCard");
		if (empty($product['shop'])){
			$product['shop'] = $this->s_read($page, "div#shop-info h3.shop-title");
		}
		$product['url'] = $url;

		$product = $this->arr_convert($product, $f_enc, $t_enc);
		return $product;
	}

	private function parseTmall($url) {
		$f_enc="gbk";
		$t_enc="utf8";

		$page = file_get_html($url);
		$product['title'] = $this->s_read($page, 'title');
		$part = $page->find('div#detail', 0);
		if (empty ($part)) {
			return null;
		}
		$product['name'] = $this->s_read($part, 'h3');
		$product['price'] = $this->s_read($part, '*#J_StrPrice');
		
		$product['price'] .= '';
		$product['shop'] = $this->s_read($page, '*#shop-info h3');
		$product['url'] = $url;

		$product = $this->arr_convert($product, $f_enc, $t_enc);
		return $product;
	}

	private function parsePaipai($url) {
		$f_enc="gb2312";
		$t_enc="utf8";

		$page = file_get_html($url);
		$product['title'] = $this->s_read($page, "title");
		$part = $page->find('div.detail', 0);
		if (empty ($part)) {
			return null;
		}
		$product['name'] = $this->s_read($part, "h1");
		$product['price'] = $this->s_read($part, "em#commodityCurrentPrice");
		$product['shop'] = 'paipai.com';
		$product['url'] = $url;

		$product = $this->arr_convert($product, $f_enc, $t_enc);
		return $product;
	}

	private function parseMoonbasa($url) {
		$f_enc="utf8";
		$t_enc="utf8";

		$page = file_get_html($url);
		$product['title'] = $this->s_read($page, "title");
		$part = $page->find('div.p_info', 0);
		if (empty ($part)) {
			return array();
		}
		$product['name'] = $this->s_read($part, "h2");
		$product['price'] = $this->s_read($part, "b.detailprice");
		$product['shop'] = 'Moonbasa.com';
		$product['url'] = $url;

		$product = $this->arr_convert($product, $f_enc, $t_enc);
		return $product;
	}

	private function parseM18($url) {
		$f_enc="utf8";
		$t_enc="utf8";

		$page = file_get_html($url);
		$product['title'] = $this->s_read($page, "title");
		$part = $page->find('div#skuWrap div.clearfix', 0);
		if (empty ($part)) {
			return array();
		}
		$product['name'] = $this->s_read($part, "h1");
		$product['price'] = $this->s_read($part, "span#stylePrice");
		$product['shop'] = 'M18.com';
		$product['url'] = $url;

		$product = $this->arr_convert($product, $f_enc, $t_enc);
		return $product;
	}

	private function parse360($url) {
		$f_enc="gb2312";
		$t_enc="utf8";

		$page = file_get_html($url);
		$product['title'] = $this->s_read($page, "title");

		$product['name'] = $this->s_read($page, "div#name");
//		$part = $page->find('ul#summary strong img', 0);
//		if (! empty($part)) {
//			$product['price'] = $part->outertext;
//		}
		$product['price'] = '';
		$product['shop'] = '360buy.com';
		$product['url'] = $url;

		$product = $this->arr_convert($product, $f_enc, $t_enc);
		return $product;
	}

	private function s_read($html, $key){
		if (empty ($html)) {
			return '';
		}
		$t = $html->find($key, 0);
		if (empty ($t)) {
			return '';
		}
		return trim(strip_tags($t->innertext));
	}

	private function arr_convert($arr, $f_enc, $t_enc){
		foreach ($arr as $k => $v) {
			$arr[$k] = mb_convert_encoding($v, $t_enc, $f_enc);
		}
		return $arr;
	}

}

/* End of file feed.php */
/* Location: ./system/application/model/feed.php */ 
