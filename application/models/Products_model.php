<?php
class Products_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function get_product_categories_by_type($type)
		{
			$query = $this->db->get_where('product_categories', array('type' => $type) );
			return $query->result_array();
		}
		
		public function get_products_by_category($cat){
			$query = $this->db->get_where('products', array('category' => $cat) );
		}
		
}