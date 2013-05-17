<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * signs Class
 * @package Roberts
 * @subpackage Backend
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
Class Signs extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}

		$this -> load -> model('signs_model');
	}

	//List all collection on backend
	public function index() {
		$config = array();
		$config["base_url"] = site_url('admin/signs/');
		$config["total_rows"] = $this -> db -> count_all('signs');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$config['num_links'] = 9;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
		$data['signs'] = $this -> signs_model -> GetAll($config["per_page"], $page);
		$data['links'] = $this -> pagination -> create_links();
		$this -> load -> view('backend/signs/list_view',$data);

	}

	
	//add new collection->upload image->get encrypted name -> add everything to db

	function add() {
		$this -> form_validation -> set_rules('name', 'sign Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[500]');
		
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/signs/add_view');
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
				if ($this -> signs_model -> Save($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/sign/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/sign/add');

				}
			} else {
				//Failed to upload file.
				$data['upload_error'] = $this -> upload -> display_errors();
				$this -> load -> view('backend/signs/add_view', $data);
			}
            
			} else {
				
				$form_data = array('name' => set_value('name'), 'description' => set_value('description'));
				if ($this -> signs_model -> Save($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/sign/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/sign/add');

				}
			}
		}
	}

	//Edit collection,little tricky no change if there is no new image

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'sign Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[2000]');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['signs'] = $this -> signs_model -> GetOne($id);
			$this -> load -> view('backend/signs/edit_view',$data);
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
					if ($this -> signs_model -> Update($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/sign/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/sign/edit/' . $id);

					}
				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$data['signs'] = $this -> signs_model -> GetOne($id);
					//$data['collections'] = $this -> collections_model -> get_all_collection_names();
					$this -> load -> view('backend/signs/edit_view', $data);
				}
			} else {

				$form_data = array('name' => set_value('name'), 'description' => set_value('description'));
				if ($this -> signs_model -> Update($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/sign/edit/' . $id);
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'Nothing to Update');
					redirect('admin/sign/edit/' . $id);

				}

			}
		}
	}

	public function filter() {

		$filter = $this -> input -> post('filter');
		$data['collections'] = $this -> collections_model -> GetAll($filter);
		$this -> load -> view('backend/collections/list_ajax_view', $data);

	}
function featured($id = null) {

		if ($id == '' || $id == null) {

			$this -> ci_alerts -> set('success', 'Some thing wrong happend we cannot set this us featured');
			redirect('admin/signs/');

		} else {

			if ($this -> signs_model -> Featured($id) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'You are done !');
				redirect('admin/signs/');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'You are done !! But this is already featured !');
				redirect('admin/signs/');

			}

		}
	}

	function unfeatured($id = null) {

		if ($id == '' || $id == null) {

			$this -> ci_alerts -> set('success', 'Some thing wrong happend try again later');
			redirect('admin/settings/');

		} else {

			if ($this -> signs_model -> UnFeatured($id) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'You are done !');
				redirect('admin/settings/');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'You are done !!');
				redirect('admin/settings/');

			}

		}
	}
	//oops,deleted from db and unlink the related image

	function delete($id = null, $filename = null) {

		if ($id == '' || $id == null) {

			redirect('admin/signs/');

		} elseif ($filename != null) {
			$this -> db -> delete('signs', array('id' => $id));
			$full_path = './uploads/' . $filename;
			//echo $full_path;
			if (file_exists($full_path)) {
				if (unlink($full_path)) {

					$this -> ci_alerts -> set('success', 'Deleted successfully');
					redirect('admin/signs/');

				} else {

					$this -> ci_alerts -> set('success', 'Delected from database,but image files are not removed');
					redirect('admin/signs/');
				}
			} else {

				$this -> ci_alerts -> set('success', 'Deleted successfully');
				redirect('admin/signs/');
			}
		}

	}

}

/* End of file collections.php */
