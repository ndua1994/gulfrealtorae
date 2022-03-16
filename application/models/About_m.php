<?php


class About_m extends CI_Model
{


public function about_us()
{
	$query=$this->db->where('is_active',1)
	                ->get('tbl_about_us');

	if($query)
	{
		return $query->row();
	}

	return false;
}


public function contact_form($data)
{
	
	$rec=[
		'name'=>$data['name'],
		'email'=>$data['email'],
		'mobile'=>$data['mobile_hidden'].$data['mobile'],
		'comment'=>$data['comment'],
		'is_active'=>1
	];

	$query=$this->db->insert('tbl_about_frm',$rec);

	if($query)
	{
		return true;
	}

	return false;

	



}




}