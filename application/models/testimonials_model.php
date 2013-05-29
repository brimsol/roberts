<?php
/**
 * Collections_model Class
 * @package Glenna Jean
 * @category Models
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Testimonials_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	// --------------------------------------------------------------------

	/**
	 * function SaveForm()
	 *
	 * insert form data
	 * @param $form_data - array
	 * @return Bool - TRUE or FALSE
	 */

	function SaveTestimonial($form_data) {
		$this -> db -> insert('testimonials', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UpdateTestimonial($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('testimonials', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function GetOne($id) {

		return $this -> db -> where('id', $id) -> limit(1) -> get('testimonials') -> result();

	}

	function GetAll($offset = null, $limit = null) {

		if ($offset != null) {
			return $this -> db -> order_by('created_at', 'DESC') -> limit($offset, $limit) -> get('testimonials') -> result();
		} else {
			return $this -> db -> order_by('created_at', 'DESC') -> get('testimonials') -> result();
		}

	}

	function GetAllHome() {

		return $this -> db -> where('flag', 'hm') -> limit(100) -> order_by('created_at', 'DESC') -> get('testimonials') -> result();

	}

	function Featured($id) {

		$data = array('flag' => 'hm');
		$this -> db -> where('id', $id);
		$this -> db -> update('testimonials', $data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UnFeatured($id) {

		$data = array('flag' => '');
		$this -> db -> where('id', $id);
		$this -> db -> update('testimonials', $data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	

}

/* End of file collections_model.php */
