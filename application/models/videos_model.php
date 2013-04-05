<?php
/**
 * videos_model Class 
 * @package Glenna Jean 
 * @category Models 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Videos_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	// --------------------------------------------------------------------

	/**
	 * function SaveStore()
	 *
	 * insert form data
	 * @param $form_data - array
	 * @return Bool - TRUE or FALSE
	 */

	function SaveVideo($form_data) {
		$this -> db -> insert('videos', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UpdateVideo($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('videos', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}
	
	function Featured($id) {

		$data = array('flag' => 'hm');
		$this -> db -> where('id', $id);
		$this -> db -> update('videos', $data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UnFeatured($id) {

		$data = array('flag' => '');
		$this -> db -> where('id', $id);
		$this -> db -> update('videos', $data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}


	function GetAll($filter = null) {
		if ($filter == null && $filter == '') {
			return $this -> db ->order_by('name','ASC') -> get('videos') -> result();
		}else{
			//$filter[] = "'" . implode("','", $filter) . "'";
			//$category = $filter;
			return $this -> db->where_in('state', $filter)->order_by('name','ASC') -> get('videos') -> result();
		}

	}

	
	function GetOne($id) {

		return $this -> db -> where('id', $id)->order_by('name','ASC') -> limit(1) -> get('videos')->result();

	}
	function GetAllHome() {

		return $this -> db -> where('flag', 'hm') -> limit(1) -> order_by('created_at', 'DESC') -> limit(1) -> get('videos') -> result();

	}

}
/* End of file onlinestore_model.php */ 