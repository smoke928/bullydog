<?php
class Charts_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function does_chart_exist($id, $name)
		{
			$query = $this->db->get_where('charts', array('id' => $id, 'name' => $name) );
			return $query->num_rows();
		}
		public function create_chart($id, $name)
		{
			$sql = "INSERT INTO charts (id, name) 
        			VALUES (".$this->db->escape($id).", ".$this->db->escape($name).")";

			$this->db->query($sql);
		}
		public function update_set($id, $name, $rpm, $hp, $torque)
		{
			$sql = "UPDATE charts
					SET ".$rpm."hp = ".$hp." , ".$rpm."tq = ".$torque." 
					WHERE id = ".$id."
					AND name = '".$name."'";
			$this->db->query($sql);
		}
		public function get_chart_set_by_id_and_name($id, $name)
		{
			$query = $this->db->get_where('charts', array('id' => $id, 'name' => $name) );
			return $query->result_array();
		}
		public function get_chart_set_by_id($id)
		{
			$query = $this->db->get_where('charts', array('id' => $id) );
			return $query->result_array();
		}
}
?>