<?php
/**
 * Categories_model Class
 * @package Roberts
 * @category Models
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Categories_model extends CI_Model {

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

	function save_a($form_data) {
		$this -> db -> insert('sub_category_a', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function save_b($form_data) {
		$this -> db -> insert('sub_category_b', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function save_c($form_data) {
		$this -> db -> insert('sub_category_c', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function get_all_sub_a() {

		//return $this -> db -> select('aid as id,name as name') -> get('sub_category_a') -> result();
		return $this -> db -> select('subcata.aid as id,subcata.product_id,subcata.name as name,p.name as pname') 
					 -> join('products p', 'subcata.product_id = p.id', 'INNER') 
					 -> order_by('created_at', 'DESC') 
					 -> get('sub_category_a subcata') -> result();
	}

	function get_all_sub_b() {

		return $this -> db -> select('bid as id,name as name') -> get('sub_category_b') -> result();

	}

	function get_all_sub_c() {

		return $this -> db -> select('cid as id,name as name') -> get('sub_category_c') -> result();

	}

	function get_one_sub_a($id) {

		return $this -> db -> select('aid as id,name as name,product_id as category') -> where('aid', $id) -> get('sub_category_a') -> result();

	}

	function get_one_sub_b($id) {

		return $this -> db -> select('bid as id,name as name,sub_aid as category') -> where('bid', $id) -> get('sub_category_b') -> result();

	}

	function get_one_sub_c($id) {

		return $this -> db -> select('cid as id,name as name,sub_bid as category') -> where('cid', $id) -> get('sub_category_c') -> result();

	}

	function update_a($id, $form_data) {

		$this -> db -> where('aid', $id);
		$this -> db -> update('sub_category_a', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function update_b($id, $form_data) {

		$this -> db -> where('bid', $id);
		$this -> db -> update('sub_category_b', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function update_c($id, $form_data) {

		$this -> db -> where('cid', $id);
		$this -> db -> update('sub_category_c', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
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

	function category_filter() {

		$table = $this -> input -> post('table');
		$id = $this -> input -> post('id');
		$id_field = $this -> input -> post('id_field');
		$id_field_get = $this -> input -> post('id_field_get');
		return $this -> db -> select($id_field_get . ' as id,name as name') -> where($id_field, $id) -> get($table) -> result();
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

	function get_sidebar($id) {

		
		//create array
		$sidebar_array = array();

		//loop through each products

		//get sub_cat_a associated with the products
			$this -> db -> where('product_id', $id);

			$sub_cat_a = $this -> db -> get('sub_category_a');

			//if there are sub categories A, add it to the post object
			if ($sub_cat_a -> num_rows() > 0) {
				
				foreach ($sub_cat_a -> result() as $sub_cat_a) {
					$this -> db -> where('sub_aid', $sub_cat_a -> aid);
					$sub_cat_b = $this -> db -> get('sub_category_b');

					if ($sub_cat_b -> num_rows() > 0) {
						
						$sub_cat_a -> sub_cat_b = $sub_cat_b -> result();
						
						

						foreach ($sub_cat_b -> result() as $sub_cat_b) {
							$this -> db -> where('sub_bid', $sub_cat_b -> bid);
							$sub_cat_c = $this -> db -> get('sub_category_c');
                            
							if ($sub_cat_c -> num_rows() > 0) {
								
								$sub_cat_b  -> sub_cat_c = $sub_cat_c -> result();
                               
							} else {

								$sub_cat_a -> sub_cat_b = $sub_cat_b;
							}

						}

					} else {

						$sub_cat_a = $sub_cat_a;
					}

				}

			} else {

				$sub_cat_a = array();
			}

			$sidebar_array[] = $sub_cat_a;

	

		return $sidebar_array;

	}

}

/* End of file collections_model.php */
