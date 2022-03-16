<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Special_offer extends MY_Controller
{

	public function index()
	{
		$config=[

			'first_url'=>base_url('special-offer'),
			'base_url'=>base_url('special-offer'),
			'total_rows'=>$this->specialOffer_m->num_rows(),
			'per_page'=>8
		];

		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$data['tags']=$this->meta_m->meta_tags('special-offer');
		$data['special_offer']=$this->specialOffer_m->view_special_offer($config['per_page'],$this->uri->segment(2));


		$this->template('special-offer',$data);
	}

}