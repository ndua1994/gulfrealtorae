<?php


class Virtual_tour extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$config=[

		'base_url'=>base_url('virtual-tour'),
		'first_url'=>base_url('virtual-tour'),
		'total_rows'=>$this->VirtualTour_m->num_rows(),
		'per_page'=>4
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['tags']=$this->meta_m->meta_tags('virtual-tour');
		$data['view_virtualtour']=$this->VirtualTour_m->view_paging($config['per_page'],$this->uri->segment(2));
		$this->template('virtual-tour',$data);
	}

	public function contact_form()
	{
		sleep(1);
		$data=$this->input->post();
		$record=$this->VirtualTour_m->contact_form($data);
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
        'mobile' => $rec['virtual_tour_hidden'].$rec['mobile'],
        'comment' => $rec['comment']);
        
        $from_email='donotreply@gulfrealtor.ae';
        $this->email->set_mailtype("html");
        $this->email->from($from_email,'Admin');
        $this->email->to('duanishant71@gmail.com');
        $this->email->subject('Contact Enquiry : Virtual Tour Form');
        $this->email->message($this->load->view('email/virtual-tour',$data, true));
		if($this->email->send())
		{
			return true;
		}
		return $this->email->print_debugger();
	}
}