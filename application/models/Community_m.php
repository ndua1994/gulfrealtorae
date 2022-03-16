<?php


class Community_m extends CI_Model
{

	public function view_community($limit,$offset)
	{
		$query=$this->db->where('is_active',1)
		                ->limit($limit,$offset)
		                ->order_by('comm_id','desc')
		                ->get('tbl_community');


		if($query)
		{
			return $query->result();
		}

		return false;

	}


	public function contact_form($data)
{
	
	$rec=[
		'name'=>$data['name'],
		'email'=>$data['email'],
		'mobile'=>$data['community_hidden'].$data['mobile'],
		'comment'=>$data['comment'],
		'is_active'=>1
	];

	$query=$this->db->insert('tbl_community_frm',$rec);

	if($query)
	{
		return true;
	}

	return false;

}

public function comm_search_view($limit,$offset,$rec=null)
{
	$cond=array('is_active'=>1);
	$query=$this->db->where($cond)
	                ->like('comm_heading',$rec)
	                ->order_by('comm_id','desc')
	                ->limit($limit,$offset)
	                ->get('tbl_community');


	if($query)
	{
		return $query->result();
	}

	return false;

}

public function num_rows($rec=null)
{
	$cond=array('is_active'=>1);
	$query=$this->db->where($cond)
	                ->like('comm_heading',$rec)
	                ->get('tbl_community');

	if($query)
	{
		return $query->num_rows();
	}

	return false;

}

public function comm_det($slug=null)
{
	$cond=['comm_slug'=>$slug,'is_active'=>1];
	$query=$this->db->where($cond)
	                ->get('tbl_community');

	if($query)
	{
		return $query->row();

	}

	return false;

	

}



}