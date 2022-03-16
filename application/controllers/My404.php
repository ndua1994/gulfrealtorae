<?php


defined('BASEPATH') or exit('No direct script access allowed');


class My404 extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data['tags']=$this->meta_m->meta_tags('error404');
		$this->template('my404',$data);
	}
}