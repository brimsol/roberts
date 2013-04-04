<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Online video Class 
 * @package Glenna Jean 
 * @subpackage Backend 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Videos extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}
		
		$this -> load -> model('videos_model');
	}

	public function index() {
		$data['videos'] = $this -> videos_model -> GetAll();
		$this -> load -> view('backend/videos/list_view', $data);
	}

	
	function add() {
		$this -> form_validation -> set_rules('name', 'Video Title', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('url', 'URL', 'required|trim|xss_clean');
		
		
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/videos/add_view');
		} else// passed validation proceed to post success logic
		{
				$form_data = array('name' => set_value('name'), 'url' => set_value('url'));
				if ($this -> videos_model -> SaveVideo($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/video/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/video/add');

				}
		
		}
	
	}

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'video Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('url', 'URL', 'required|trim|xss_clean');
		
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['videos'] = $this -> videos_model -> GetOne($id);
			$this -> load -> view('backend/videos/edit_view', $data);
		} else// passed validation proceed to post success logic
		{
			// build array for the model
			
					$form_data = array('name' => set_value('name'), 'url' => set_value('url'));
					if ($this -> videos_model -> UpdateVideo($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/video/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'Nothing Changed');
						redirect('admin/video/edit/' . $id);

					}
		}
	}

	function delete($id = null, $filename = null) {

		if ($id == '' || $id == null) {
			redirect('admin/videos/');
		} else {
			$this -> db -> delete('videos', array('id' => $id));
			if ($filename != null) {
				$full_path = 'uploads/' . $filename;
				echo $full_path;
				unlink($full_path);
			}

			$this -> ci_alerts -> set('success', 'Video deleted successfully');
			redirect('admin/videos/');
		}

	}

}
/* End of file video.php */