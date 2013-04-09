<?php
/**
 * Collections_model Class
 * @package Glenna Jean
 * @category Models
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Products_model extends CI_Model {

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

	function Save($form_data) {
		$this -> db -> insert('products', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function Update($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('products', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function GetOne($id) {

		return $this -> db -> where('id', $id) -> limit(1) -> get('products') -> result();

	}
	
	function GetOne_row($id) {

		return $this -> db -> where('id', $id) -> limit(1) -> get('products');

	}
	function GetSearchResult($key){
		
		return $this -> db -> like('name', $key, 'after')->order_by('name','ASC') -> get('products') -> result();
	}

	function GetAll($offset = null, $limit = null) {

		if ($offset != null) {
			return $this -> db -> order_by('created_at', 'DESC') -> limit($offset, $limit) -> get('products')->result();
		} else {
			return $this -> db -> order_by('created_at', 'DESC') -> get('products')->result();
		}

	}

	
}

/* End of file collections_model.php */
