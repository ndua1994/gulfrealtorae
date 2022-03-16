<?php

class Blog_m extends CI_Model
{

	public function view_blog()
	{
		$query=$this->db->select('tb.*,tl.first_name,tl.last_name')
		                ->from('tbl_blog as tb')
		                ->join('tbl_login as tl','tb.login_id=tl.login_id','left')
		                ->order_by('tb.blog_id','desc')
		                ->get();

		if($query)
		{
			return $query->result_object();
		}



		return false;
	}



	public function add_blog($data)
	{

		$add_rec=[

		'blog_img'=>$data['blog_img'],
		'blog_img_alt_tag'=>$data['blog_img_alt_tag'],
		'blog_heading'=>$data['blog_heading'],
		'blog_short_description'=>$data['blog_short_description'],
		'blog_long_description'=>$data['blog_long_description'],
		'blog_author_img'=>(!empty($data['blog_author_img']) ? $data['blog_author_img'] : ''),
		'blog_author_img_alt'=>$data['blog_author_img_alt'],
		'blog_author_name'=>$data['blog_author_name'],
		'blog_author_descp'=>$data['blog_author_descp'],
		'blog_tags'=>$data['blog_tags'],
		'meta_title'=>$data['blog_meta_title'],
		'meta_keyword'=>$data['blog_meta_keyword'],
		'meta_description'=>$data['blog_meta_description'],
		'blog_slug'=>$data['blog_slug'],
		'login_id'=>$_SESSION['login_id'],
		'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
		'updated_at'=>mdate("%Y-%m-%d %h:%i:%s"),
		'tstp'=>mdate("%Y-%m-%d %h:%i:%s")
		];

		$query=$this->db->insert('tbl_blog',$add_rec);
        
        if($query)
		{
			return true;
		}

		return false;
	}


	public function edit_blog($id)
	{
		$query=$this->db->where('blog_id',$id)
		                ->get('tbl_blog');

		if($query)
		{
			return $query->row();
		}


	}

	public function select_blog($id)
	{
		$query=$this->db->where('blog_id',$id)
		                ->get('tbl_blog');

		if($query)
		{
			return $query->row();
		}

	}


	public function update_blog($data,$id)
	{
        $blog_rec=[

        	'blog_img'=>$data['blog_img'],
        	'blog_img_alt_tag'=>$data['blog_img_alt_tag'],
        	'blog_heading'=>$data['blog_heading'],
        	'blog_short_description'=>$data['blog_short_description'],
        	'blog_long_description'=>$data['blog_long_description'],
        	'blog_author_img'=>$data['blog_author_img'],
        	'blog_author_img_alt'=>$data['blog_author_img_alt'],
        	'blog_author_name'=>$data['blog_author_name'],
        	'blog_author_descp'=>$data['blog_author_descp'],
        	'blog_tags'=>$data['blog_tags'],
        	'meta_title'=>$data['blog_meta_title'],
        	'meta_keyword'=>$data['blog_meta_keyword'],
        	'meta_description'=>$data['blog_meta_description'],
        	'blog_slug'=>$data['blog_slug'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s"),
			'tstp'=>mdate("%Y-%m-%d %h:%i:%s")
        ];
        
       

       
		$query=$this->db->where('blog_id',$id)
		                ->update('tbl_blog',$blog_rec);
		                
		               

		if($query)
		{
			return true;
		}               

		return false; 

	}


	public function del_blog($del_id)
	{
		$query=$this->db->where('blog_id',$del_id)
		                ->delete('tbl_blog');
		if($query)
		{
			return true;
		}

		return false;

	}






}