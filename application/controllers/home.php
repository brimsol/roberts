<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Home Class
 * @package Glenna Jean
 * @subpackage Front End
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this -> load -> library('session');
		//$this -> load -> model('backend/collections_model');
		$this -> load -> model('spotlights_model');
		$this -> load -> model('testimonials_model');
		$this -> load -> model('slider_model');
		$this -> load -> model('videos_model');
		$this -> load -> model('clients_model');
		$this -> load -> model('pages_model');
		$this -> load -> model('products_model');
		$this -> load -> model('ourworks_model');

	}

	public function index() {

		$data['slider'] = $this -> slider_model -> GetAllHome();
		$data['spotlights'] = $this -> spotlights_model -> GetAllHome();
		$data['testimonials'] = $this -> testimonials_model -> GetAllHome();
		$data['videos'] = $this -> videos_model -> GetAllHome();
		$data['clients'] = $this -> clients_model -> GetAllHome();
		$data['title'] = "Home";
		$this -> load -> view('home_view', $data);

	}

	public function about() {

		$data['title'] = 'About us';
		$data['page'] = $this -> pages_model -> GetOne(2) -> row();
		$this -> load -> view('about_view', $data);

	}

	public function contact() {

		$data['title'] = 'Contact Us';
		$data['page'] = $this -> pages_model -> GetOne(3) -> row();
		$this -> load -> view('contact_view', $data);

	}

	public function products() {

		$data['title'] = 'Products';
		$data['products'] = $this -> products_model -> GetAll();
		$this -> load -> view('product_view', $data);

	}

	public function search() {

		$data['title'] = 'Search Products';
		$key = $this -> input -> post('term');
		$data['products'] = $this -> products_model -> GetSearchResult($key);
		$this -> load -> view('product_search_view', $data);

	}

	public function products_view($id) {

		$data['title'] = 'Products';
       
		$data['products'] = $this -> products_model -> GetOne($id);
		$data['products_list'] = $this -> products_model -> GetAll();
		$data['pid'] = $id;
		$data['ourworks'] = $this -> ourworks_model -> GetAllInProduct($id);
		$this -> load -> view('product_details_view', $data);

	}
	public function products_view_ajax() {

        $id = $this -> input -> post('filter');
		$data['products'] = $this -> products_model -> GetOne($id);
		$data['ourworks'] = $this -> ourworks_model -> GetAllInProduct($id);
		$this -> load -> view('product_details_ajax_view', $data);

	}

	public function ourworks() {

		$data['title'] = 'Our Works';

		$data['products'] = $this -> products_model -> GetAll();
		$data['ourworks'] = $this -> ourworks_model -> GetAllFiltered();
		$this -> load -> view('ourworks_view', $data);

	}

	public function spotlights() {

		$data['title'] = 'Spotlights';

		$data['spotlights'] = $this -> spotlights_model -> GetAll();
		$this -> load -> view('spotlight_more_view', $data);

	}

	public function ourworks_filtered() {

		$id = $this -> input -> post('filter');
		$data['ourworks'] = $this -> ourworks_model -> GetAllFiltered($id);
		$this -> load -> view('ourworks_ajax_view', $data);

	}

}

/* End of file home.php */
