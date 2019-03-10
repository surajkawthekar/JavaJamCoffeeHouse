<?php
	class MusicController extends CI_Controller{
		public function music(){
			$this->load->helper('url');
			$this->load->view('Templates/musicheader.php');
			$this->load->model('musicModel');
			$data['singers']= $this->musicModel->getData();
			$this->load->view('MusicView', $data);
			$this->load->view('Templates/footer.php');
		}
	}
?>