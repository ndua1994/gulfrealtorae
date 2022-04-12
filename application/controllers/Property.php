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


	public function property_detail($det)
	{
	$data['tags']=$this->property_m->property_tags($det);
	$data['property_detail']=$this->property_m->property_detail($det);
	$data['similar_property']=$this->property_m->similar_property($det);
	$data['prop_inner_images']=explode(',',$data['property_detail']->prop_inner_img);
	$this->template('sale-property-detail',$data);
	}
}