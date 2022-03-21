<?php


class Property extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function sale()
	{
		$data['tags']=$this->meta_m->meta_tags('sale-property');
		$this->template('sale-property',$data);
	}
}