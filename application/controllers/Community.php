<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Community extends MY_Controller
{
	public function index()
	{
		
    $comm_name=$this->session->userdata('comm_name');
   
	$config=[
			'first_url'=>base_url('community'),
			'base_url'=>base_url('community'),
			'total_rows'=>$this->community_m->num_rows($comm_name),
			'per_page'=>4
	];
	$this->pagination->initialize($config);
	$data['links']=$this->pagination->create_links();
	$data['tags']=$this->meta_m->meta_tags('Community');
	$data['community']=$this->community_m->comm_search_view($config['per_page'],$this->uri->segment(2),$comm_name);
	$this->template('community',$data);
	}


	public function community_search()
	{


		$comm_search=$this->input->post('comm_search');

		$this->session->set_userdata('comm_name',$comm_search);
		$config=[
        'first_url'=>base_url('community'),
        'base_url'=>base_url('community'),
        'total_rows'=>$this->community_m->num_rows($comm_search),
        'per_page'=>4
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['comm_search_view']=$this->community_m->comm_search_view($config['per_page'],$this->uri->segment(2),$comm_search); 
		$data['total_rec']=$this->community_m->num_rows($comm_search);


		 if($data['total_rec']>0)
		 {
			$search_ouput=$this->load->view('ajax/community-search',$data,TRUE);
            $attr=array('status'=>'success','msg'=>$search_ouput);
		 }
		 else
		 {
		 	$attr=array('status'=>'error','msg'=>'<h2>No record found</h2>');
		 }

		 echo json_encode($attr);
	 
	}


	public function community_detail($comm_slug=null)
	{

		$data['tags']=$this->community_m->comm_det($comm_slug);
		$data['comm_det']=$this->community_m->comm_det($comm_slug);
		
		if(empty($data['comm_det']))
		{
		   $data['tags']=$this->meta_m->meta_tags('error404');
           $this->template('my404',$data);
		}
		else
		{	
		$this->template('community-detail',$data);
		}
	}


	public function contact_form()
	{
		sleep(1);
		$data=$this->input->post();
		$record=$this->community_m->contact_form($data);
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
        'mobile' => $rec['community_hidden'].$rec['mobile'],
        'comment' => $rec['comment']);
        
        $from_email='donotreply@gulfrealtor.ae';
        $this->email->set_mailtype("html");
        $this->email->from($from_email,'Admin');
        $this->email->to('duanishant71@gmail.com');
        $this->email->subject('Contact Enquiry : Community Form');
        $this->email->message($this->load->view('email/community',$data, true));
		if($this->email->send())
		{
			return true;
		}
		return $this->email->print_debugger();
	}

	


}