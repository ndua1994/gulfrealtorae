<?php


class Property extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function sale()
	{
		$sort=$this->session->userdata('sort_rec');


		$config=[
			'first_url'=>base_url('property/sale'),
			'base_url'=>base_url('property/sale'),
			'total_rows'=>$this->property_m->sale_num_rows($sort),
			'per_page'=>9
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['tags']=$this->meta_m->meta_tags('sale-property');
		$data['sale_property']=$this->property_m->sale_property_filter($sort,$config['per_page'],$this->uri->segment(3));
		$this->template('sale-property',$data);
	}

	public function home_filter()
	{
		$sort=$this->input->post('sort');
		$this->session->set_userdata('sort_home',$sort);

       $data['home_property']=$this->property_m->home_property_filter($sort);
	   $data['total_rec']=$this->property_m->home_num_rows($sort);


		 if($data['total_rec']>0)
		 {
			$search_ouput=$this->load->view('ajax/home-property-filter',$data,TRUE);
            $attr=array('status'=>'success','msg'=>$search_ouput);
		 }
		 else
		 {
		 	$attr=array('status'=>'error','msg'=>'<h2>No record found</h2>');
		 }

		 echo json_encode($attr);



	}

	public function sale_filter()
	{
		$sort=$this->input->post('sort');
		$this->session->set_userdata('sort_rec',$sort);


		$config=[
        'base_url'=>base_url('property/sale'),
        'first_url'=>base_url('property/sale'),
        'total_rows'=>$this->property_m->sale_num_rows($sort),
        'per_page'=>9
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['sale_property']=$this->property_m->sale_property_filter($sort,$config['per_page'],$this->uri->segment(3));
		$data['total_rec']=$this->property_m->sale_num_rows($sort);


		 if($data['total_rec']>0)
		 {
			$search_ouput=$this->load->view('ajax/sale-property-filter',$data,TRUE);
            $attr=array('status'=>'success','msg'=>$search_ouput);
		 }
		 else
		 {
		 	$attr=array('status'=>'error','msg'=>'<h2>No record found</h2>');
		 }

		 echo json_encode($attr);



	}


	public function rent_filter()
	{
		$sort=$this->input->post('sort');
		$this->session->set_userdata('sort_rec',$sort);


		$config=[
        'base_url'=>base_url('property/rent-property'),
        'first_url'=>base_url('property/rent-property'),
        'total_rows'=>$this->property_m->rent_num_rows($sort),
        'per_page'=>9
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['rent_property']=$this->property_m->rent_property_filter($sort,$config['per_page'],$this->uri->segment(3));
		$data['total_rec']=$this->property_m->rent_num_rows($sort);


		 if($data['total_rec']>0)
		 {
			$search_ouput=$this->load->view('ajax/rent-property-filter',$data,TRUE);
            $attr=array('status'=>'success','msg'=>$search_ouput);
		 }
		 else
		 {
		 	$attr=array('status'=>'error','msg'=>'<h2>No record found</h2>');
		 }

		 echo json_encode($attr);



	}


		public function offplan_filter()
	{
		$sort=$this->input->post('sort');
		$this->session->set_userdata('sort_rec',$sort);


		$config=[
        'base_url'=>base_url('property/off-plan'),
        'first_url'=>base_url('property/off-plan'),
        'total_rows'=>$this->property_m->offplan_num_rows($sort),
        'per_page'=>9
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['offplan']=$this->property_m->offplan_property_filter($sort,$config['per_page'],$this->uri->segment(3));
		$data['total_rec']=$this->property_m->offplan_num_rows($sort);


		 if($data['total_rec']>0)
		 {
			$search_ouput=$this->load->view('ajax/offplan-property-filter',$data,TRUE);
            $attr=array('status'=>'success','msg'=>$search_ouput);
		 }
		 else
		 {
		 	$attr=array('status'=>'error','msg'=>'<h2>No record found</h2>');
		 }

		 echo json_encode($attr);



	}

	public function enquiry_form()
	{
		sleep(1);
		$data=$this->input->post();
		$record=$this->property_m->enquiry_form($data);
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


		
        $data = array('name' => $rec['prop_name'], 
        'email' => $rec['prop_email'],
        'mobile' => $rec['prop_mobile'],
        'comment' => $rec['prop_message']);
        
        
        $from_email='donotreply@gulfrealtor.ae';
        $this->email->set_mailtype("html");
        $this->email->from($from_email,'Admin');
        $this->email->to('duanishant71@gmail.com');
        $this->email->subject('Sale Property Enquiry : Schedule a Visit');
        $this->email->message($this->load->view('email/sale-property',$data, true));
		if($this->email->send())
		{
			return true;
		}
		return $this->email->print_debugger();
	}


	public function sale_property_download_brochure()
	{
		
		sleep(1);
		$data=$this->input->post();
		$record=$this->property_m->sale_property_download_brochure_form($data);
		$send_mail=$this->sale_property_download_brochure_mail($data);

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


	public function sale_property_download_brochure_mail($rec)
	{
		$data = array('name' => $rec['name'], 
        'email' => $rec['email'],
        'mobile' => $rec['mobile']);
        
        
        $from_email='donotreply@gulfrealtor.ae';
        $this->email->set_mailtype("html");
        $this->email->from($from_email,'Admin');
        $this->email->to('duanishant71@gmail.com');
        $this->email->subject('Sale Property Enquiry : Download Brochure');
        $this->email->message($this->load->view('email/sale-property-download-brochure',$data, true));
		if($this->email->send())
		{
			return true;
		}
		return $this->email->print_debugger();
	}

	public function property_detail($det)
	{
	$data['tags']=$this->property_m->property_tags($det);
	$data['property_detail']=$this->property_m->property_detail($det);
	$data['similar_property']=$this->property_m->similar_property($det);
	$data['floor_plan_detail']=$this->property_m->floor_plan_detail($data['property_detail']->prop_id);
	$data['prop_inner_images']=explode(',',$data['property_detail']->prop_inner_img);
	$this->template('sale-property-detail',$data);
	}


	public function rent_property()
	{
		$sort=$this->session->userdata('sort_rec');


		$config=[
			'first_url'=>base_url('property/rent-property'),
			'base_url'=>base_url('property/rent-property'),
			'total_rows'=>$this->property_m->rent_num_rows($sort),
			'per_page'=>9
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['tags']=$this->meta_m->meta_tags('rent-property');
		$data['rent_property']=$this->property_m->rent_property_filter($sort,$config['per_page'],$this->uri->segment(3));
		$this->template('rent-property',$data);
	}


	public function off_plan()
	{

		$sort=$this->session->userdata('sort_rec');

		$config=[
			'first_url'=>base_url('property/off-plan'),
			'base_url'=>base_url('property/off-plan'),
			'total_rows'=>$this->property_m->offplan_num_rows($sort),
			'per_page'=>9
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['tags']=$this->meta_m->meta_tags('offplan');
		$data['offplan']=$this->property_m->offplan_property_filter($sort,$config['per_page'],$this->uri->segment(3));
		$this->template('offplan-property',$data);
	}

	public function search()
	{
		$data['search_property']=$this->input->post('search_property');
		$search_property=$this->input->post('search_property');
		$data['tags']=$this->meta_m->meta_tags('search');
		$data['search_count']=$this->property_m->searh_count($search_property);
		$data['search_prop']=$this->property_m->search_prop($search_property);	
		$this->template('search',$data);
		
	}


	
}