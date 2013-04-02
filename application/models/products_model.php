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

	function GetAll($offset = null, $limit = null) {

		if ($offset != null) {
			return $this -> db -> order_by('created_at', 'DESC') -> limit($offset, $limit) -> get('products')->result();
		} else {
			return $this -> db -> order_by('created_at', 'DESC') -> get('products')->result();
		}

	}

	function get_all_collection_names() {

		return $this -> db -> select('id,name') -> order_by('name', 'ASC') -> get('products');

	}

	function GetAllCollectionId() {

		return $this -> db -> select('id') -> order_by('name', 'ASC') -> get('products');

	}

	function GetAllCollectionNames($filter = null) {

		if ($filter == null || $filter == '') {

			return $this -> db -> select('id,name') -> order_by('name', 'ASC') -> get('products') -> result();
		} else {

			return $this -> db -> select('id,name') -> order_by('name', 'ASC') -> where('category', $filter) -> get('products') -> result();
		}

	}

	function get_all() {

		return $this -> db -> order_by('name', 'ASC') -> get('collections');

	}

	/*
	 function GetAll($filter = null) {
	 if ($filter == null && $filter == '') {
	 return $this -> db ->order_by('name','ASC') -> get('collections') -> result();
	 } else {
	 $filter[] = "'" . implode("','", $filter) . "'";
	 //$category = $filter;
	 return $this -> db -> where_in('category', $filter)->order_by('name','ASC') -> get('collections')-> result();
	 }

	 }*/

	function GetAllHome() {

		return $this -> db -> select('id,image,name') -> order_by('name', 'ASC') -> get('collections') -> result();

	}

	function GetSimilar($id) {

		return $this -> db -> select('id,image,name') -> order_by('name', 'ASC') -> where_in('id', $id) -> get('collections') -> result();

	}

	function GetNextId($id) {

		return $this -> db -> select('id') -> where('id >', $id) -> order_by("name", "asc") -> limit(1) -> get('collections') -> row();
		//return $this -> db -> select('id') -> where_not_in('id', $id)->order_by("name", "ASC") -> limit(1) -> get('collections')->row();

	}

	function GetPrevId($id) {

		return $this -> db -> select('id') -> where('id <', $id) -> order_by("name", "desc") -> limit(1) -> get('collections') -> row();
		//return $this -> db -> select('id') -> where_not_in('id', $id) ->order_by("name", "DESC") -> limit(1) -> get('collections')->row();

	}

}

/* End of file collections_model.php */
