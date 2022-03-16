<?php


class Meta_m extends CI_Model
{
	public function meta_tags($page)
	{
		$cond=['meta_slug'=>$page,'is_active'=>1];
		$query=$this->db->where($cond)
		                ->get('tbl_meta_tags');

		if(!empty($query))
		{
			return $query->row();
		}

		return false;

	}

	public function meta_all()
	{
		$query=$this->db->select('tmt.*,tl.first_name,tl.last_name')
		                ->from('tbl_meta_tags as tmt')
		                ->join('tbl_login as tl','tmt.login_id=tl.login_id','left')
		                ->order_by('tmt.id','desc')
		                ->get();
               
		if($query)
		{
			return $query->result_object();
		}

		return false;
	}

	public function add_meta($data)
	{
		$insert_rec=array(

			'meta_title'=>$data['meta_title'],
			'meta_keyword'=>$data['meta_keyword'],
			'meta_description'=>$data['meta_description'],
			'meta_slug'=>$data['meta_slug'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s"),
			'tstp'=>mdate("%Y-%m-%d %h:%i:%s")
		);


		$query=$this->db->insert('tbl_meta_tags',$insert_rec);
		if($query)
		{
			return true;
		}

		return false;

	}

	public function view_meta($edit_id)
	{
		$cond=['id'=>$edit_id];
		$query=$this->db->where($cond)
		                ->get('tbl_meta_tags');

		if($query)
		{
			return $query->row();
		}                

		return false;

	}


	public function update_meta($data)
	{
		$id=$data['edit_id'];
		$update_meta=array(

		'meta_title'=>$data['meta_title'],
		'meta_keyword'=>$data['meta_keyword'],
		'meta_description'=>$data['meta_description'],
		'meta_slug'=>$data['meta_slug'],
		'login_id'=>$_SESSION['login_id'],
		'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
		'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
		);

	


		$query=$this->db->where('id',$id)
		                ->update('tbl_meta_tags',$update_meta);



		if($query)
		{
			return true;
		}

		return false;

	}

	public function del_meta($del_id)
	{
		$query=$this->db->where('id',$del_id)
		                ->delete('tbl_meta_tags');

		if($query)
		{
			return true;
		}

		return false;
	}
}