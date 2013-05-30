<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Categories Class
 * @package Roberts
 * @subpackage Backend
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
Class Categories extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}

		$this -> load -> model('products_model');
		$this -> load -> model('categories_model');
	}

	

	function add_sub_category_a() {

		$this -> form_validation -> set_rules('name', 'Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		$data['categories'] = $this -> products_model -> GetAll();
		$data['action_link'] = 'add_sub_category_a';
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/categories/add_view', $data);
		} else// passed validation proceed to post success logic
		{

			$form_data = array('product_id' => set_value('category'), 'name' => set_value('name'));
			if ($this -> categories_model -> save_a($form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('backend/categories/add_sub_category_a');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
				redirect('backend/categories/add_sub_category_a');

			}
		}
	}

	function add_sub_category_b() {

		$this -> form_validation -> set_rules('name', 'Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		$data['categories'] = $this -> categories_model -> get_all_sub_a();
		$data['action_link'] = 'add_sub_category_b';
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/categories/add_view', $data);
		} else// passed validation proceed to post success logic
		{

			$form_data = array('sub_aid' => set_value('category'), 'name' => set_value('name'));
			if ($this -> categories_model -> save_b($form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('backend/categories/add_sub_category_b');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
				redirect('backend/categories/add_sub_category_b');

			}
		}
	}

	function add_sub_category_c() {

		$this -> form_validation -> set_rules('name', 'Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		$data['categories'] = $this -> categories_model -> get_all_sub_b();
		$data['action_link'] = 'add_sub_category_c';
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/categories/add_view', $data);
		} else// passed validation proceed to post success logic
		{

			$form_data = array('sub_bid' => set_value('category'), 'name' => set_value('name'));
			if ($this -> categories_model -> save_c($form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('backend/categories/add_sub_category_c');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
				redirect('backend/categories/add_sub_category_c');

			}
		}
	}

	

	function list_sub_category_a() {

		$data['categories'] = $this -> categories_model -> get_all_sub_a();
		$data['action_link'] = 'edit_sub_category_a';
		$data['refresh_link'] = 'list_sub_category_a';
		$data['del_link'] = 'sub_category_a';
		$data['del_field'] = 'aid';
		$this -> load -> view('backend/categories/list_view', $data);

	}
	function list_sub_category_b() {

		$data['categories'] = $this -> categories_model -> get_all_sub_b();
		$data['action_link'] = 'edit_sub_category_b';
		$data['refresh_link'] = 'list_sub_category_b';
		$data['del_link'] = 'sub_category_b';
		$data['del_field'] = 'bid';
		$this -> load -> view('backend/categories/list_view', $data);

	}
	function list_sub_category_c() {

		$data['categories'] = $this -> categories_model -> get_all_sub_c();
		$data['action_link'] = 'edit_sub_category_c';
		$data['refresh_link'] = 'list_sub_category_c';
		$data['del_link'] = 'sub_category_c';
		$data['del_field'] = 'cid';
		$this -> load -> view('backend/categories/list_view', $data);

	}

	function edit_sub_category_a($id) {

		$this -> form_validation -> set_rules('name', 'Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		$data['categories'] = $this -> products_model -> GetAll();
		$data['categories_editor'] = $this -> categories_model -> get_one_sub_a($id);
		$data['action_link'] = 'edit_sub_category_a';
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{  
			$this -> load -> view('backend/categories/edit_view', $data);
			
		} else// passed validation proceed to post success logic
		{

			$form_data = array('product_id' => set_value('category'), 'name' => set_value('name'));
			if ($this -> categories_model -> update_a($id,$form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('backend/categories/edit_sub_category_a/' . $id);

				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
				redirect('backend/categories/edit_sub_category_a/' . $id);

			}
		}
	}

	function edit_sub_category_b($id) {

		$this -> form_validation -> set_rules('name', 'Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		$data['categories'] = $this -> categories_model -> get_all_sub_a();
		$data['categories_editor'] = $this -> categories_model -> get_one_sub_b($id);
		$data['action_link'] = 'edit_sub_category_b';
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/categories/edit_view', $data);
		} else// passed validation proceed to post success logic
		{

			$form_data = array('sub_aid' => set_value('category'), 'name' => set_value('name'));
			if ($this -> categories_model -> update_b($id,$form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('backend/categories/edit_sub_category_b');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
				redirect('backend/categories/edit_sub_category_b');

			}
		}
	}

	function edit_sub_category_c($id) {

		$this -> form_validation -> set_rules('name', 'Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		$data['categories'] = $this -> categories_model -> get_all_sub_c();
		$data['categories_editor'] = $this -> categories_model -> get_one_sub_b($id);
		$data['action_link'] = 'edit_sub_category_c';
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/categories/edit_view', $data);
		} else// passed validation proceed to post success logic
		{

			$form_data = array('sub_bid' => set_value('category'), 'name' => set_value('name'));
			if ($this -> categories_model -> update_c($id,$form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('backend/categories/edit_sub_category_c');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
				redirect('backend/categories/edit_sub_category_c');

			}
		}
	}

	//Edit collection,little tricky no change if there is no new image

	

	//oops,deleted from db and unlink the related image

	function delete($id,$link,$table,$id_field) {

			$this -> db -> delete($table, array($id_field => $id));
			redirect('backend/categories/'.$link);
	
	}
	
	function filter() {

		$data['categories'] = $this -> categories_model -> category_filter();
		$this -> load -> view('backend/categories/options_view', $data);
		
		
	}

	function delete_category($id = null, $filename = null) {

		if ($id == '' || $id == null) {

			redirect('admin/ourworks/categories');

		} else {
			$this -> db -> delete('categories', array('id' => $id));
			$this -> ci_alerts -> set('success', 'Deleted successfully');
			redirect('admin/ourworks/categories');
		}
	}

}

/* End of file categories.php */
