<?php

class User_m extends CI_Model
{
	public function user_list()
	{
		$cond=['tl.login_type_id!='=>1];
		$query=$this->db->select('tl.*,tlt.login_type')
		                ->from('tbl_login as tl')
		                ->join('tbl_login_type as tlt','tl.login_type_id=tlt.login_type_id','left')
		                ->where($cond)
		                ->order_by('tl.login_id','desc')
		                ->get();                
                



		if(!empty($query))
		{
			return $query->result_object();

		}

		return false;
	}

	public function add_user($data)
	{

		$insert_rec=array(

			'first_name'=>$data['first_name'],
			'last_name'=>$data['last_name'],
			'email'=>$data['email'],
			'password'=>md5($data['password']),
			'login_type_id'=>'2',
			'is_active'=>(!empty($data['is_active']) ? '1' : '2')
			);
		$query=$this->db->insert('tbl_login',$insert_rec);

		if($query)
		{
			return true;
		}

		return false;

	}


	public function view_user($edit_id)
	{
		$query=$this->db->where('login_id',$edit_id)
		                ->get('tbl_login');

		if($query)
		{
			return $query->row();
		}

		return false;
	}


	public function update_user($data)
	{
		$id=$data['id'];
		$update_rec=array(

			'first_name'=>$data['first_name'],
			'last_name'=>$data['last_name'],
			'is_active'=>(!empty($data['is_active']) ? '1' : '2')
		);

		$query=$this->db->where('login_id',$id)
		                ->update('tbl_login',$update_rec);

		if($query)
		{
            return true;
		}

		return false;

	}

	public function del_user($del_id)
	{
		$query=$this->db->where('login_id',$del_id)
		                ->delete('tbl_login');

		if($query)
		{
			return true;
		}

		return false;


	}
}