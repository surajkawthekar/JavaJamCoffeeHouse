<?php 
		class musicModel extends CI_Model{
			public function getData()
		{
			$this->db->select('musician.Musician_Image_URL,performance.Description,performance.Month_Year,musician.Name');
			$this->db->from('musician');
			$this->db->join('performance', 'musician.MusicianId = performance.MusicianId');
			$this->db->order_by('performance.Month_Year');

			$query = $this->db->get();

			return $query->result();
			

		} 
		}
 ?>