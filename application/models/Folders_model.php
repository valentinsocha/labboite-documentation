<?php
    class Folders_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

		public function get_hard_folders(){
			$this->db->order_by('order', 'ASC');
			$query = $this->db->get('hard_folders');
			return $query->result_array();
        }
        
        public function get_soft_folders(){
			$this->db->order_by('order', 'ASC');
			$query = $this->db->get('soft_folders');
			return $query->result_array();
        }

        public function get_hard_items($slug = FALSE)
		{
			if($slug === FALSE){
				$query = $this->db->get('hard_items');
				return $query->result_array();
			}

			$query = $this->db->get_where('hard_items', array('relative_folder' => $slug));
			return $query->result_array();
		}
		
		public function get_hard_title($slug = FALSE)
		{
			$query = $this->db->get_where('hard_folders', array('slug' => $slug));
			return $query->row_array();
		}
        
        public function get_soft_items($slug = FALSE)
		{
			if($slug === FALSE){
				$query = $this->db->get('soft_items');
				return $query->result_array();
			}

			$query = $this->db->get_where('soft_items', array('relative_folder' => $slug));
			return $query->result_array();
		}

		public function get_soft_title($slug = FALSE)
		{
			$query = $this->db->get_where('soft_folders', array('slug' => $slug));
			return $query->row_array();
		}
    }
?>