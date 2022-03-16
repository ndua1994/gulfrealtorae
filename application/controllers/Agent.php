<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Agent extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['tags']=$this->meta_m->meta_tags('agent');
		$data['agent']=$this->agent_m->agent();
		
		$this->template('agent',$data);
	}

	public function agent_detail($agnt_slug=null)
	{
		$data['tags']=$this->agent_m->agent_detail($agnt_slug);

		if(empty($data['tags']))
		{
		   $data['tags']=$this->meta_m->meta_tags('error404');
           $this->template('my404',$data);
		}
		else
		{	
		$this->template('agent-detail',$data);
		}

	}

		public function contact_form()
	{
		sleep(1);
		$data=$this->input->post();

		$record=$this->agent_m->contact_form($data);
		$send_mail=$this->send_mail($data);

		if($record && $send_mail)
		{
			
			$attr=array('status'=>'success','msg'=>'Record has been submitted successsfully !');
		}
		else
		{
            $attr=array('status'=>'error','msg'=>'Error ! Try after sometime');
		}

		echo json_encode($attr);
		

	}


	public function send_mail($rec)
	{
		
        $data = array('agent_name'=>$rec['agent_name'],
        	'name' => $rec['name'], 
        'email' => $rec['email'],
        'mobile' => $rec['mobile_number_hidden'].$rec['mobile'],
        'message' => $rec['message']);
        
        $from_email='donotreply@gulfrealtor.ae';
        $this->email->set_mailtype("html");
        $this->email->from($from_email,'Admin');
        $this->email->to('duanishant71@gmail.com');
        $this->email->subject('Agent Enquiry : Community Form');
        $this->email->message($this->load->view('email/agent',$data, true));
		if($this->email->send())
		{
			return true;
		}
		return $this->email->print_debugger();
	}
}