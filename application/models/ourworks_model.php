<?php
/**
 * Ourworks_model Class
 * @package Roberts
 * @category Models
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Ourworks_model extends CI_Model {

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
		$this -> db -> insert('ourworks', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function Update($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('ourworks', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function SaveCategory($form_data) {
		$this -> db -> insert('categories', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UpdateCategory($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('categories', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function filter() {

		//$table = $this -> input -> post('table');
		$id = $this -> input -> post('sub_cat_a');
		$db_field = $this -> input -> post('db_field');
		return $this -> db->where($db_field, $id) -> get('ourworks') -> result();
	}

	function GetOneCategory($id) {

		return $this -> db -> where('id', $id) -> limit(1) -> get('categories') -> result();

	}

	function GetOne($id) {

		return $this -> db -> where('id', $id) -> limit(1) -> get('ourworks') -> result();

	}

	function GetAll($offset = null, $limit = null) {

		if ($offset != null) {
			//return $this -> db -> order_by('created_at', 'DESC') -> limit($offset, $limit) -> get('ourworks') -> result();
			return $this -> db -> select('o.id AS id,o.name AS name,o.image AS image,o.category AS categoryid,o.created_at AS created_at,c.id AS cid,c.name AS category') -> join('products c', 'o.category = c.id', 'INNER') -> order_by('created_at', 'DESC') -> limit($offset, $limit) -> get('ourworks o') -> result();
		} else {
			//return $this -> db -> order_by('created_at', 'DESC') -> get('ourworks') -> result();
			return $this -> db -> select('o.id AS id,o.name AS name,o.image AS image,o.category AS category,o.created_at AS created_at,c.id AS cid,c.name AS cname') -> join('products c', 'o.category = c.id', 'INNER') -> order_by('created_at', 'DESC') -> get('ourworks o') -> result();
		}

	}

	function GetAllFiltered($filter = null) {
		if ($filter == null && $filter == '') {
			return $this -> db -> order_by('created_at', 'DESC') -> get('ourworks') -> result();
		} else {
			$filter[] = "'" . implode("','", $filter) . "'";
			//$category = $filter;
			return $this -> db -> where_in('category', $filter) -> order_by('created_at', 'DESC') -> get('ourworks') -> result();
		}

	}

	function GetAllCategories($offset = null, $limit = null) {

		if ($offset != null) {
			return $this -> db -> order_by('created_at', 'DESC') -> limit($offset, $limit) -> get('categories') -> result();
		} else {
			return $this -> db -> order_by('created_at', 'DESC') -> get('categories') -> result();
		}

	}

	function GetAllInProduct($id, $offset = null, $limit = null) {

		//return $this -> db -> where('category', $id) -> order_by('created_at', 'ASC') -> get('ourworks') -> result();
		if ($offset != null) {
			//return $this -> db -> order_by('created_at', 'DESC') -> limit($offset, $limit) -> get('ourworks') -> result();
			return $this -> db -> where('category', $id) -> order_by('created_at', 'ASC') -> limit($offset, $limit) -> get('ourworks') -> result();
		} else {
			return $this -> db -> where('category', $id) -> order_by('created_at', 'ASC') -> get('ourworks') -> result();

		}
	}

}

/* End of file collections_model.php */
