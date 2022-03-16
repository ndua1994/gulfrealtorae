<?php


class blog_m extends CI_Model
{

	public function view_blog($limit,$offset)
	{
		$query=$this->db->where('is_active',1)
		                ->limit($limit,$offset)
		                ->order_by('blog_id','desc')
		                ->get('tbl_blog');


		if($query)
		{
			return $query->result();
		}

		return false;

	}


	public function new_blog()
	{
		$query=$this->db->where('is_active',1)
		                ->order_by('blog_id','desc')
		                ->limit('4')
		                ->get('tbl_blog');

		if($query)
		{
			return $query->result();
		}

		return false;

	}


	public function img_blog()
	{
		$query=$this->db->where('is_active',1)
		                ->order_by('rand()')
		                ->limit('9')
		                ->get('tbl_blog');

		if($query)
		{
			return $query->result();
		}

		return false;
	}


	public function num_rows()
	{
		$query=$this->db->where('is_active',1)
		                ->order_by('blog_id','desc')
		                ->get('tbl_blog');

		if($query)
		{
			return $query->num_rows();
		}

		return false;
	}

	public function blog_detail($blog_slug)
	{
		$cond=[

			'blog_slug'=>$blog_slug,
			'is_active'=>1
		];
		$query=$this->db->where($cond)
		                ->get('tbl_blog');




		if($query)
		{
			return $query->row();
		}

		return false;
	}
}