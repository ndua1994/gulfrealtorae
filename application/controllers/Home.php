<?php

defined('BASEPATH') or exit('No direct script access allowed');


class home extends MY_Controller
{
	
	public function index()
	{
		$data['tags']=$this->meta_m->meta_tags('homepage');
		$data['special_offer']=$this->specialOffer_m->latest_offer();
		$data['virtual_tour']=$this->VirtualTour_m->view_virtualtour();
		$this->template('home',$data);
	}
}