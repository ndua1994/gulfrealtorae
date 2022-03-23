<?php


class Property extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function sale()
	{
		$config=[
			'first_url'=>base_url('property/sale'),
			'base_url'=>base_url('property/sale'),
			'total_rows'=>$this->property_m->sale_num_rows(),
			'per_page'=>1
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['tags']=$this->meta_m->meta_tags('sale-property');
		$data['sale_property']=$this->property_m->sale_property($config['per_page'],$this->uri->segment(3));
		$this->template('sale-property',$data);
	}
}