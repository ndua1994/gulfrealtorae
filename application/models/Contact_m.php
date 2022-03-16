<?php


class Contact_m extends CI_Model
{
	public function contact_detail()
	{
		$query=$this->db->where('is_active',1)
		                ->get('tbl_contact');
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
		'mobile'=>$data['mobile_number_hidden'].$data['mobile'],
		'comment'=>$data['comment'],
		'is_active'=>1
	];

	$query=$this->db->insert('tbl_contact_frm',$rec);

	if($query)
	{
		return true;
	}

	return false;

	



}

}