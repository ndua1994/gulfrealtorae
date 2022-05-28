<?php

defined('BASEPATH') or exit('No direct script access allowed');


class home extends MY_Controller
{
	
	public function index()
	{
		$data['tags']=$this->meta_m->meta_tags('homepage');
		$data['search_content']=$this->property_m->search_content();
		$data['special_offer']=$this->specialOffer_m->latest_offer();
		$data['virtual_tour']=$this->VirtualTour_m->view_virtualtour();
		$data['community_one']=$this->community_m->view_community_order(1);
		$data['community_two']=$this->community_m->view_community_order(2);
		$data['community_three']=$this->community_m->view_community_order(3);
		$data['community_four']=$this->community_m->view_community_order(4);
		$data['featured_listing']=$this->property_m->featured_listing();
		$data['latest_property']=$this->property_m->latest_property();
		$this->template('home',$data);
	}
}