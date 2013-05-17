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
class Settings extends CI_Controller {

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
		$this -> load -> model('signs_model');

	}

	public function index() {
        
		
		$data['spotlights'] = $this -> spotlights_model -> GetAllHome();
		$data['testimonials'] = $this -> testimonials_model -> GetAllHome();
		$data['signs'] = $this -> signs_model -> GetAllHome();
		$data['videos'] = $this -> videos_model -> GetAllHome();
		$data['clients'] = $this -> clients_model -> GetAllHome();
		$this -> load -> view('backend/settings/settings_view',$data);

	}

}

/* End of file home.php */
