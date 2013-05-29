<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Ourwork Class
 * @package Roberts
 * @subpackage Front End
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Ourwork extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('products_model');
		$this -> load -> model('ourworks_model');
		$this -> load -> model('categories_model');

	}

	public function index() {

		$data['title'] = 'Our Works';

		$data['products'] = $this -> products_model -> GetAll();
		//$data['ourworks'] = $this -> ourworks_model -> GetAllFiltered();
		//$this -> load -> view('ourworks_view', $data);

		$config = array();
		$config["base_url"] = site_url('ourwork/');
		$config["total_rows"] = $this -> db -> count_all('ourworks');
		$config["per_page"] = 9;
		$config["uri_segment"] = 2;
		$config['num_links'] = 9;
		$config['full_tag_open'] = '<div id="pages_link"><ul><li>PAGES ► </li>';
		$config['full_tag_close'] = '</ul></div><div class="clear"></div>';
		$config['num_tag_open'] = '<li class="inactive_page">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active_page">';
		$config['cur_tag_close'] = '</li>';
		$config['next_link'] = FALSE;
		$config['prev_link'] = FALSE;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(2)) ? $this -> uri -> segment(2) : 0;
		$data['ourworks'] = $this -> ourworks_model -> GetAll($config["per_page"], $page);
		$data['links'] = $this -> pagination -> create_links();
		$this -> load -> view('ourworks_view', $data);
	}

	public function view_main() {

		$id = $this -> input -> post('id');
		$data['title'] = 'Our Works';
		$data['products'] = $this -> products_model -> GetAll();
		$config = array();
		$config["base_url"] = site_url('ourworks/');
		$config["total_rows"] = $this -> db -> where('category', $id) -> count_all_results('ourworks');
		$config["per_page"] = 9;
		$config["uri_segment"] = 2;
		$config['num_links'] = 9;
		$config['full_tag_open'] = '<div id="pages_link"><ul><li>PAGES ► </li>';
		$config['full_tag_close'] = '</ul></div><div class="clear"></div>';
		$config['num_tag_open'] = '<li class="inactive_page">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active_page">';
		$config['cur_tag_close'] = '</li>';
		$config['next_link'] = FALSE;
		$config['prev_link'] = FALSE;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(2)) ? $this -> uri -> segment(2) : 0;
		$data['ourworks'] = $this -> ourworks_model -> GetAllInProduct($id, $config["per_page"], $page);
		$data['sidebar'] = $this -> categories_model -> get_sidebar($id);
		$data['links'] = $this -> pagination -> create_links();
		$this -> load -> view('ourworks_ajax_view', $data);

	}

	public function view($id) {

		$data['title'] = 'Our Works';
		$data['products'] = $this -> products_model -> GetAll();
		$config = array();
		$config["base_url"] = site_url('ourworks/');
		$config["total_rows"] = $this -> db -> where('category', $id) -> count_all_results('ourworks');
		$config["per_page"] = 9;
		$config["uri_segment"] = 2;
		$config['num_links'] = 9;
		$config['full_tag_open'] = '<div id="pages_link"><ul><li>PAGES ► </li>';
		$config['full_tag_close'] = '</ul></div><div class="clear"></div>';
		$config['num_tag_open'] = '<li class="inactive_page">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active_page">';
		$config['cur_tag_close'] = '</li>';
		$config['next_link'] = FALSE;
		$config['prev_link'] = FALSE;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(2)) ? $this -> uri -> segment(2) : 0;
		$data['ourworks'] = $this -> ourworks_model -> GetAllInProduct($id, $config["per_page"], $page);
		$data['sidebar'] = $this -> categories_model -> get_sidebar($id);
		$data['links'] = $this -> pagination -> create_links();
		$this -> load -> view('ourworks_product_view', $data);

	}

	public function filter() {

		$data['ourworks'] = $this -> ourworks_model -> filter();
		$this -> load -> view('ourworks_ajax_filter_view', $data);

	}

	function get_sidebar($id) {

		$sidebar = $this -> categories_model -> get_sidebar($id);
		print_r($sidebar);

	}

}

/* End of file ourwork.php */
