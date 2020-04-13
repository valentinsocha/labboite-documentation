<?php
    class Tools_model extends CI_Model {
		public function get_tool_head($slug = FALSE)
		{
			$query = $this->db->get_where('hard_items', array('slug' => $slug));
			return $query->row_array();
		}
    }
?>