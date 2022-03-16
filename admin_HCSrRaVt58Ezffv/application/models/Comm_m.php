<?php

class Comm_m extends CI_Model
{
	public function view()
	{
		$query=$this->db->select('tc.*,tl.first_name,tl.last_name')
		                ->from('tbl_community as tc')
		                ->join('tbl_login as tl','tc.login_id=tl.login_id','left')
		                ->order_by('tc.comm_id','desc')
		                ->get();
		if($query)
		{
			return $query->result_object();
		}

		return false;
	}


	public function add_comm($rec)
	{
		$data=[

			'comm_img'=>$rec['comm_img'],
			'comm_img_alt'=>$rec['comm_img_alt'],
			'comm_inner_img'=>$rec['comm_inner_img'],
			'comm_inner_img_alt'=>$rec['comm_inner_img_alt'],
			'comm_heading'=>$rec['comm_heading'],
			'comm_loc'=>$rec['comm_loc'],
			'comm_short_descp'=>$rec['comm_short_descp'],
			'comm_long_descp'=>$rec['comm_long_descp'],
			'comm_map'=>$rec['comm_map'],
			'meta_title'=>$rec['meta_title'],
			'meta_keyword'=>$rec['meta_keyword'],
			'meta_description'=>$rec['meta_description'],
			'comm_slug'=>$rec['comm_slug'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
		];

		$query=$this->db->insert('tbl_community',$data);
		if($query)
		{
			return true;
		}

		return false;

	}

	public function view_comm($id)
	{
		$query=$this->db->where('comm_id',$id)
		                ->get('tbl_community');

	    if($query)
	    {
	    	return $query->row();
	    }

	    return false;

	}

	public function del_comm($id)
	{
		$query=$this->db->where('comm_id',$id)
		                ->delete('tbl_community');

		if($query)
		{
			return true;
		}

		return false;

	}

	public function update_comm($rec,$id)
	{
		$data=[

			'comm_img'=>$rec['comm_img'],
			'comm_img_alt'=>$rec['comm_img_alt'],
			'comm_inner_img'=>$rec['comm_inner_img'],
			'comm_inner_img_alt'=>$rec['comm_inner_img_alt'],
			'comm_heading'=>$rec['comm_heading'],
			'comm_loc'=>$rec['comm_loc'],
			'comm_short_descp'=>$rec['comm_short_descp'],
			'comm_long_descp'=>$rec['comm_long_descp'],
			'comm_map'=>$rec['comm_map'],
			'meta_title'=>$rec['meta_title'],
			'meta_keyword'=>$rec['meta_keyword'],
			'meta_description'=>$rec['meta_description'],
			'comm_slug'=>$rec['comm_slug'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")

		];

		$query=$this->db->where('comm_id',$id)
		                ->update('tbl_community',$data);

		if($query)
		{
			return true;
		}
		return false;
	}
}