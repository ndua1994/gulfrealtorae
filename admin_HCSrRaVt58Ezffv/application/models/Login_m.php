<?php

class Login_m extends CI_Model
{
	public function login_check($email,$password)
	{
		$cond=array('tl.email'=>$email,'tl.password'=>md5($password));

		$query=$this->db->select('tl.*,tlt.login_type')
		                ->from('tbl_login as tl')
		               ->join('tbl_login_type as tlt','tl.login_type_id=tlt.login_type_id','left')
		               ->where($cond)
		               ->get();


		if($query->num_rows())
		{
			return $query->row();
		}

		return false;
		

	}
}