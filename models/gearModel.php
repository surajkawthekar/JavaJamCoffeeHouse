<?php 
		class gearModel extends CI_Model{
			public function getData()
		{
			$this->db->select('ProductId, Name, Description,Product_Image_URL,Price');
			$this->db->from('Products');
			//$this->db->order_by('ProductId');

			$query = $this->db->get();

			return $query->result();
			

		} 
		}
 ?>