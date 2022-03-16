<?php


class MY_Controller extends CI_Controller
{

	public function login_template($view,$data)
	{
		$this->load->view('login_template/header',$data);
		$this->load->view($view,$data);
		$this->load->view('login_template/footer');
	}

	public function inner_template($view,$data)
	{
		$this->load->view('inner_template/header',$data);
		$this->load->view('inner_template/sidebar');
		$this->load->view($view,$data);
		$this->load->view('inner_template/footer');
	}

	public function error_template($view,$data)
	{
		$this->load->view('inner_template/header',$data);
		$this->load->view($view,$data);
		$this->load->view('inner_template/footer');
	}


	
}