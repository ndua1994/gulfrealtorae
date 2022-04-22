<?php


defined('BASEPATH') or exit('No Direct script access allowed');


class About_us extends MY_Controller
{
	public function index()
	{
		$data['tags']=$this->meta_m->meta_tags('about-us');
		$data['about_us']=$this->about_m->about_us();
		$this->template('about-us',$data);
	}


	public function contact_form()
	{
		sleep(1);
		$data=$this->input->post();
		$record=$this->about_m->contact_form($data);
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
        'mobile' => $rec['mobile_hidden'].$rec['mobile'],
        'comment' => $rec['comment']);
        
        
        $from_email='donotreply@gulfrealtor.ae';
        $this->email->set_mailtype("html");
        $this->email->from($from_email,'Admin');
        $this->email->to('duanishant71@gmail.com');
        $this->email->subject('Contact Enquiry : About Us Form');
        $this->email->message($this->load->view('email/about-us',$data, true));
		if($this->email->send())
		{
			return true;
		}
		return $this->email->print_debugger();
	}
}