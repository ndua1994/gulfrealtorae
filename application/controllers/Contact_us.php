<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends MY_Controller
{

	public function index()
	{
		$data['tags']=$this->meta_m->meta_tags('contact-us');
		$data['contact_detail']=$this->contact_m->contact_detail();
		$this->template('contact-us',$data);
	}


	public function contact_form()
	{
		sleep(1);
		$data=$this->input->post();
		$record=$this->contact_m->contact_form($data);
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


		
        $data = array('name' => $rec['name'], 
        'email' => $rec['email'],
        'mobile' => $rec['mobile_number_hidden'].$rec['mobile'],
        'comment' => $rec['comment']);
        
        
        $from_email='donotreply@gulfrealtor.ae';
        $this->email->set_mailtype("html");
        $this->email->from($from_email,'Admin');
        $this->email->to('duanishant71@gmail.com');
        $this->email->subject('Contact Enquiry : Contact Us Form');
        $this->email->message($this->load->view('email/contact-us',$data, true));
		if($this->email->send())
		{
			return true;
		}
		return $this->email->print_debugger();
	}

}