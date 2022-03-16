<?php


class Popup_m extends CI_Model
{
	public function popup_frm($data)
	{
		$rec=[

			'name'=>$data['name'],
			'email'=>$data['email'],
			'mobile'=>$data['popup_number_hidden'].$data['mobile'],
			'message'=>$data['message'],
			'is_active'=>'1'
		];

		$query=$this->db->insert('tbl_popup_frm',$rec);
		if($query)
		{
			return true;
		}

		return false;
	}
}