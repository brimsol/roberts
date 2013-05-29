<?php
function get_sidebar($id) {

	// execute query
	$query = $this -> db -> where('id', $id) -> get('products');

	//make sure results exist
	if ($query -> num_rows() > 0) {
		$products = $query -> result();
	} else {
		return FALSE;
	}

	//create array
	$sidebar_array = array();

	//loop through each products
	foreach ($products as $product) {

		//get sub_cat_a associated with the products
		$this -> db -> where('product_id', $product -> id);

		$sub_cat_a = $this -> db -> get('sub_category_a');

		//if there are sub categories A, add it to the post object
		if ($sub_cat_a -> num_rows() > 0) {
			$sub_cat_a = $sub_cat_a -> result();
			//$products -> sub_cat_a = $sub_cat_a->result();
			foreach ($sub_cat_a as $sub_cat_a) {
				$this -> db -> where('sub_aid', $sub_cat_a -> aid);
				$sub_cat_b = $this -> db -> get('sub_category_b');

				if ($sub_cat_b -> num_rows() > 0) {
					$sub_cat_b = $sub_cat_b -> result();
					$sub_cat_a -> sub_cat_b = $sub_cat_b -> result();

					foreach ($sub_cat_b as $sub_cat_b) {
						$this -> db -> where('sub_bid', $sub_cat_b -> bid);
						$sub_cat_c = $this -> db -> get('sub_category_c');

						if ($sub_cat_c -> num_rows() > 0) {
							$sub_cat_c = $sub_cat_c -> result();

							$sub_cat_a -> sub_cat_b -> sub_cat_c = $sub_cat_b -> result();

						} else {

							$sub_cat_a -> sub_cat_b = array();
						}

					}

				} else {

					$sub_cat_a = array();
				}

			}

		} else {
			
			$sub_cat_a->$sub_cat_b->$sub_cat_c = array();
		}
           
           
      $sidebar_array[] = $sub_cat_a->$sub_cat_b->$sub_cat_c;
	  
	  
	}

	return $sidebar_array;

}
?>