<?php
	class JobsController extends CI_Controller{
		public function jobs(){
			$this->load->helper('url');
			$this->load->view('Templates/header.php');
			//$this->load->model('jobsModel');
			//$data['artist']= $this->musicModel->getData();
			$this->load->view('JobsView');
			$this->load->view('Templates/footer.php');
		}
		public function form_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("username","UserName",'required|alpha');
		$this->form_validation->set_rules("email","E-mail_Id",'required|valid_email');
		$this->form_validation->set_rules("exp","Experience",'required');

		if($this->form_validation->run())
		{
			//true
			$this->load->model("jobsModel");
			$data = array(
				"Name" =>$this->input->post("username"),
				"Email" =>$this->input->post("email"),
				"Experience" =>$this->input->post("exp")
			);
			$this->jobsModel->insert_data($data);
			redirect("/JobsController/inserted");
		}
		else{
			$this->jobs();
		}
		}
		public function inserted(){
			$this->jobs();
		}
	}
?>