<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Popup_form extends MY_Controller
{
	public function index()
	{
		$data=$this->input->post();
		$popup_frm=$this->Popup_m->popup_frm($data);
		if($popup_frm && $this->send_mail($data))
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
        'mobile' => $rec['popup_number_hidden'].$rec['mobile'],
        'message' => $rec['message']);
        
        $from_email='donotreply@gulfrealtor.ae';
        $this->email->set_mailtype("html");
        $this->email->from($from_email,'Admin');
        $this->email->to('duanishant71@gmail.com');
        $this->email->subject('Contact Enquiry : Popup Form');
        $this->email->message($this->load->view('email/popup',$data, true));
		if($this->email->send())
		{
			return true;
		}
		return $this->email->print_debugger();

     }
}