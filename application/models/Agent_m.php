<?php

class Agent_m extends CI_Model
{
	public function agent()
	{
		$cond=['is_active'=>1];
		$query=$this->db->where($cond)
		                ->order_by('agnt_id','desc')
		                ->get('tbl_agent');
		           
		if($query)
		{
			return $query->result();
		}

		return false;
	}

	public function agent_detail($slug=null)
	{
		$cond=['agnt_slug'=>$slug,'is_active'=>1];
		$query=$this->db->where($cond)
		                ->get('tbl_agent');

		if($query)
		{
			return $query->row();
		}

		return false;
	}

	
	public function contact_form($data)
{
	
	$rec=[
		'agent_name'=>$data['agent_name'],
		'name'=>$data['name'],
		'email'=>$data['email'],
		'mobile'=>$data['mobile_number_hidden'].$data['mobile'],
		'message'=>$data['message'],
		'is_active'=>'1'
	];

	$query=$this->db->insert('tbl_agnt_frm',$rec);

	if($query)
	{
		return true;
	}

	return false;

}


}