<?php
	class jobsModel extends CI_Model{
		function insert_data($data)
		{
			$this->db->insert("jobs",$data);
		}
	} 
?>