<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Spotlight Class
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

		$this -> load -> model('ourworks_model');
		$this -> load -> model('products_model');
	}

	//List all collection on backend
	public function index() {
		$config = array();
		$config["base_url"] = site_url('admin/ourworks/');
		$config["total_rows"] = $this -> db -> count_all('ourworks');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$config['num_links'] = 9;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
		$data['ourworks'] = $this -> ourworks_model -> GetAll($config["per_page"], $page);
		$data['links'] = $this -> pagination -> create_links();
		$this -> load -> view('backend/ourworks/list_view', $data);

	}

	public function categories() {
		$config = array();
		$config["base_url"] = site_url('admin/categories/');
		$config["total_rows"] = $this -> db -> count_all('categories');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$config['num_links'] = 9;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
		$data['categories'] = $this -> ourworks_model -> GetAllCategories($config["per_page"], $page);
		$data['links'] = $this -> pagination -> create_links();
		$this -> load -> view('backend/ourworks/list_category_view', $data);

	}

	//add new spotlight->upload image->get encrypted name -> add everything to db

	function add() {
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		$this -> form_validation -> set_rules('name', 'Title', 'required|trim|xss_clean|max_length[100]');
		//$this -> form_validation -> set_rules('userfile', 'Image', 'required');
        $data['categories'] = $this -> products_model -> GetAll();
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/ourworks/add_view',$data);
		} else// passed validation proceed to post success logic
		{
			if (isset($_FILES['userfile']['name'])) {

				$fileUpload = $_FILES['userfile']['name'];

			} else {

				$fileUpload = 'test';

			}
			// build array for the model
			if (strlen($fileUpload) > 0) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '500';
				$config['encrypt_name'] = TRUE;
				$this -> load -> library('upload', $config);

				if ($this -> upload -> do_upload()) {
					$data = $this -> upload -> data();
					$form_data = array('category' => set_value('category'), 'name' => set_value('name'), 'image' => $data['file_name']);
					if ($this -> ourworks_model -> Save($form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/ourwork/add');
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/ourwork/add');

					}
				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$this -> load -> view('backend/ourworks/add_view', $data);
				}

			} else {

				$form_data = array('category' => set_value('category'), 'name' => set_value('name'));
				if ($this -> ourworks_model -> Save($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/ourwork/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/ourwork/add');

				}
			}
		}
	}

	function add_category() {
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[500]');
		$this -> form_validation -> set_rules('name', 'Title', 'required|trim|xss_clean|max_length[100]');
        
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/ourworks/add_category_view');

		} else {

			$form_data = array('description' => set_value('description'), 'name' => set_value('name'));
			if ($this -> ourworks_model -> SaveCategory($form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('admin/ourworks/category/add');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
				redirect('admin/ourworks/category/add');

			}
		}
	}

	function edit_category($id) {
		$this -> form_validation -> set_rules('description', 'description', 'required|trim|xss_clean|max_length[500]');
		$this -> form_validation -> set_rules('name', 'Title', 'required|trim|xss_clean|max_length[100]');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['categories'] = $this -> ourworks_model -> GetOneCategory($id);
			$this -> load -> view('backend/ourworks/edit_category_view', $data);
		} else {// passed validation proceed to post success logic

			$form_data = array('description' => set_value('description'), 'name' => set_value('name'));
			if ($this -> ourworks_model -> UpdateCategory($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('admin/ourworks/category/edit/' . $id);
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'Nothing to Update');
				redirect('admin/ourworks/category/edit/' . $id);

			}

		}
	}

	//Edit collection,little tricky no change if there is no new image

	function edit($id) {
		
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean|max_length[500]');
		$this -> form_validation -> set_rules('name', 'Title', 'required|trim|xss_clean|max_length[200]');
        $data['categories'] = $this -> products_model -> GetAll();
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['ourworks'] = $this -> ourworks_model -> GetOne($id);
			$this -> load -> view('backend/ourworks/edit_view', $data);
		} else {// passed validation proceed to post success logic

			// build array for the model
			if (isset($_FILES['userfile']['name'])) {

				$fileUpload = $_FILES['userfile']['name'];

			} else {

				$fileUpload = '';

			}
			if (strlen($fileUpload) > 0) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '500';
				$config['encrypt_name'] = TRUE;
				$this -> load -> library('upload', $config);

				if ($this -> upload -> do_upload()) {
					$data = $this -> upload -> data();
					$form_data = array('category' => set_value('category'), 'name' => set_value('name'), 'image' => $data['file_name']);
					if ($this -> ourworks_model -> Update($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/ourwork/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/ourwork/edit/' . $id);

					}
				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$data['testimonials'] = $this -> spotlights_model -> GetOne($id);
					//$data['collections'] = $this -> collections_model -> get_all_collection_names();
					$this -> load -> view('backend/ourworks/edit_view', $data);
				}
			} else {

				$form_data = array('category' => set_value('category'), 'name' => set_value('name'));
				if ($this -> ourworks_model -> Update($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/ourwork/edit/' . $id);
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'Nothing to Update');
					redirect('admin/ourwork/edit/' . $id);

				}

			}
		}
	}

	public function filter() {

		$filter = $this -> input -> post('filter');
		$data['collections'] = $this -> collections_model -> GetAll($filter);
		$this -> load -> view('backend/collections/list_ajax_view', $data);

	}

	//oops,deleted from db and unlink the related image

	function delete($id = null, $filename = null) {

		if ($id == '' || $id == null) {

			redirect('admin/spotlights/');

		} elseif ($filename != null) {
			$this -> db -> delete('ourworks', array('id' => $id));
			$full_path = './uploads/' . $filename;
			//echo $full_path;
			if (file_exists($full_path)) {
				if (unlink($full_path)) {

					$this -> ci_alerts -> set('success', 'Deleted successfully');
					redirect('admin/ourworks/');

				} else {

					$this -> ci_alerts -> set('success', 'Delected from database,but image files are not removed');
					redirect('admin/ourworks/');
				}
			} else {

				$this -> ci_alerts -> set('success', 'Deleted successfully');
				redirect('admin/ourworks/');
			}
		}

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

/* End of file collections.php */
