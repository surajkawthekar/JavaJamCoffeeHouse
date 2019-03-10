<?php
	class CartController extends CI_Controller{
		
		public function cart(){
			$this->load->helper('url');
			$this->load->view('Templates/header.php');
			//$this->load->model('cartModel');
			//$data['products'] = $this->billing_model->get_all();			
			$this->load->view('CartView');
			$this->load->view('Templates/footer.php');
		}
	}
?>