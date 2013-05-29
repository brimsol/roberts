<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Products Class
 * @package Roberts
 * @subpackage Backend
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
Class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}

		$this -> load -> model('products_model');
	}

	//List all collection on backend
	public function index() {
		$config = array();
		$config["base_url"] = site_url('admin/products/');
		$config["total_rows"] = $this -> db -> count_all('products');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$config['num_links'] = 9;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
		$data['products'] = $this -> products_model -> GetAll($config["per_page"], $page);
		$data['links'] = $this -> pagination -> create_links();
		$this -> load -> view('backend/products/list_view',$data);

	}

	
	//add new collection->upload image->get encrypted name -> add everything to db

	function add() {
		$this -> form_validation -> set_rules('name', 'Product Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[500]');
		
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/products/add_view');
		} else// passed validation proceed to post success logic
		{
			if (isset($_FILES['userfile']['name'])) {

				$fileUpload = $_FILES['userfile']['name'];

			} else {

				$fileUpload = '';

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
				$form_data = array('name' => set_value('name'), 'description' => set_value('description'), 'image' => $data['file_name']);
				if ($this -> products_model -> Save($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/product/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/product/add');

				}
			} else {
				//Failed to upload file.
				$data['upload_error'] = $this -> upload -> display_errors();
				$this -> load -> view('backend/products/add_view', $data);
			}
            
			} else {
				
				$form_data = array('name' => set_value('name'), 'description' => set_value('description'));
				if ($this -> products_model -> Save($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/product/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/product/add');

				}
			}
		}
	}

	//Edit collection,little tricky no change if there is no new image

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'Product Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[2000]');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['products'] = $this -> products_model -> GetOne($id);
			$this -> load -> view('backend/products/edit_view',$data);
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
					$form_data = array('name' => set_value('name'), 'description' => set_value('description'), 'image' => $data['file_name']);
					if ($this -> products_model -> Update($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/product/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/product/edit/' . $id);

					}
				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$data['products'] = $this -> products_model -> GetOne($id);
					//$data['collections'] = $this -> collections_model -> get_all_collection_names();
					$this -> load -> view('backend/products/edit_view', $data);
				}
			} else {

				$form_data = array('name' => set_value('name'), 'description' => set_value('description'));
				if ($this -> products_model -> Update($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/product/edit/' . $id);
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'Nothing to Update');
					redirect('admin/product/edit/' . $id);

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

			redirect('admin/products/');

		} elseif ($filename != null) {
			$this -> db -> delete('products', array('id' => $id));
			$full_path = './uploads/' . $filename;
			//echo $full_path;
			if (file_exists($full_path)) {
				if (unlink($full_path)) {

					$this -> ci_alerts -> set('success', 'Deleted successfully');
					redirect('admin/products/');

				} else {

					$this -> ci_alerts -> set('success', 'Delected from database,but image files are not removed');
					redirect('admin/products/');
				}
			} else {

				$this -> ci_alerts -> set('success', 'Deleted successfully');
				redirect('admin/products/');
			}
		}

	}

}

/* End of file products.php */
