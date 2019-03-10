<?php
	class HomeController extends CI_Controller{
		public function index(){
			$this->load->helper('url');
			$this->load->view('Templates/header.php');
			$this->load->view('HomeView');
			$this->load->view('Templates/footer.php');
		}

		public function menu(){
			$this->load->helper('url');
			$this->load->view('Templates/header.php');
			$this->load->view('MenuView');
			$this->load->view('Templates/footer.php');
		}
	}
?>