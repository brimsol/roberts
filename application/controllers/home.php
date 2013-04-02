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
	}

	public function index() {

		$data['slider'] = $this -> slider_model -> GetHomeSlider();
		$data['spotlights'] = $this -> spotlights_model -> GetAllHome();
		$data['testimonials'] = $this -> testimonials_model -> GetAllHome();
		$data['videos'] = $this -> videos_model -> GetAllHome();
		$data['clients'] = $this -> clients_model -> GetAllHome();
		$data['title']="Home";
		$this -> load -> view('home_view', $data);

	}

	public function about() {

		
		$data['page'] = $this -> pages_model -> GetOne(2) -> row();
		$this -> load -> view('about_view', $data);

	}

	public function contact() {

		$data['page'] = $this -> pages_model -> GetOne(3) -> row();
		$this -> load -> view('contact_view', $data);

	}

}
/* End of file home.php */