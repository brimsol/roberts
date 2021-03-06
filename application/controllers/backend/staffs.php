<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Staffs Class
 * @package Roberts
 * @subpackage Backend
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
Class Staffs extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}

		$this -> load -> model('staffs_model', 'staffs');
	}

	//List all collection on backend
	public function index() {
		$config = array();
		$config["base_url"] = site_url('admin/testimonials/');
		$config["total_rows"] = $this -> db -> count_all('testimonials');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$config['num_links'] = 9;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
		$data['staffs'] = $this -> staffs -> GetAll($config["per_page"], $page);
		$data['links'] = $this -> pagination -> create_links();
		$this -> load -> view('backend/staffs/list_view', $data);

	}

	//add new collection->upload image->get encrypted name -> add everything to db

	function add() {
		$this -> form_validation -> set_rules('name', 'Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('designation', 'Designation', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[2000]');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/staffs/add_view');
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
					$form_data = array('name' => $this -> input -> post('name'), 'description' => $this -> input -> post('description'), 'designation' => $this -> input -> post('designation'), 'image' => $data['file_name']);
					if ($this -> staffs -> SaveStaffs($form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/staffs/add');
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/staffs/add');

					}
				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$this -> load -> view('backend/staffs/add_view', $data);
				}

			} else {

				$form_data = array('name' => $this -> input -> post('name'), 'description' => $this -> input -> post('description'), 'designation' => $this -> input -> post('designation'));
				if ($this -> staffs -> SaveStaffs($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/staffs/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/staffs/add');

				}
			}
		}
	}

	//Edit collection,little tricky no change if there is no new image

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('designation', 'Designation', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[2000]');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['staffs'] = $this -> staffs -> GetOne($id);
			$this -> load -> view('backend/staffs/edit_view', $data);
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
					$form_data = array('name' => $this -> input -> post('name'), 'description' => $this -> input -> post('description'), 'designation' => $this -> input -> post('designation'), 'image' => $data['file_name']);
					if ($this -> staffs -> UpdateStaffs($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/staffs/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/staffs/edit/' . $id);

					}
				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$data['testimonials'] = $this -> staffs -> GetOne($id);
					//$data['collections'] = $this -> collections_model -> get_all_collection_names();
					$this -> load -> view('backend/staffs/edit_view', $data);
				}
			} else {

				$form_data = array('name' => $this -> input -> post('name'), 'description' => $this -> input -> post('description'), 'designation' => $this -> input -> post('designation'));
				if ($this -> staffs -> UpdateStaffs($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/staffs/edit/' . $id);
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'Nothing to Update');
					redirect('admin/staffs/edit/' . $id);

				}

			}
		}
	}

	

	public function view($id) {

		$data['officials'] = $this -> staffs -> GetOne($id);
		$this -> load -> view('backend/staffs/detail_view', $data);

	}

	
	//oops,deleted from db and unlink the related image

	function delete($id = null, $filename = null) {

		if ($id == '' || $id == null) {

			redirect('admin/staffs/');

		} elseif ($filename != null) {
			$this -> db -> delete('staffs', array('id' => $id));
			$full_path = './uploads/' . $filename;
			//echo $full_path;
			if (file_exists($full_path)) {
				if (unlink($full_path)) {

					$this -> ci_alerts -> set('success', 'Collection deleted successfully');
					redirect('admin/staffs/');

				} else {

					$this -> ci_alerts -> set('success', 'Collection delected from database,but image files are not removed');
					redirect('admin/staffs/');
				}
			} else {

				$this -> ci_alerts -> set('success', 'Collection deleted successfully');
				redirect('admin/staffs/');
			}
		}

	}

}

/* End of file staffs.php */
