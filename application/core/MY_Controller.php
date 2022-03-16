<?php


class MY_Controller extends CI_Controller
{
	public function template($view,$data)
	{
		
		$ci=& get_instance();
		$data['header_details']=$ci->Page_m->header_details();
		$data['footer_details']=$ci->Page_m->footer_details();
		$this->load->view('templates/header',$data);
		$this->load->view($view,$data);
		$this->load->view('templates/footer');
	}

}