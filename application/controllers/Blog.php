<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Blog extends MY_Controller
{
	
	public function index()
	{
		
		$config=[
		'first_url'=>base_url('blog'),
		'base_url'=>base_url('blog'),
		'total_rows'=>$this->blog_m->num_rows(),
		'per_page'=>1
		];
	$this->pagination->initialize($config);
	$data['links']=$this->pagination->create_links();
	$data['tags']=$this->meta_m->meta_tags('Blog');
	$data['new_blog']=$this->blog_m->new_blog();
	$data['img_blog']=$this->blog_m->img_blog();
	$data['blog']=$this->blog_m->view_blog($config['per_page'],$this->uri->segment(2));
	$this->template('blog',$data);
	}






	public function blog_detail($blog_slug=null)
	{
    $data['tags']=$this->blog_m->blog_detail($blog_slug);
	$data['blog_detail']=$this->blog_m->blog_detail($blog_slug);
	$data['nonencoded_url']="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$data['encoded_url']=urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

	if(empty($data['blog_detail']))
		{
		   $data['tags']=$this->meta_m->meta_tags('error404');
           $this->template('my404',$data);
		}
		else
		{
			$this->template('blog-detail',$data);
		}
	
	}


}