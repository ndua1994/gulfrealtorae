<?php

class Virtualtour_m extends CI_Model
{
	public function view()
	{
		$query=$this->db->select('tvt.*,tl.first_name,tl.last_name')
		                ->from('tbl_virtual_tour as tvt')
		                ->join('tbl_login as tl','tvt.login_id=tl.login_id','left')
		                ->order_by('tvt.vt_id','desc')
		                ->get();

		if($query)
		{
			return $query->result_object();
		}

		return false;

	}

	public function add_virtualtour($rec)
	{
		$data=[

			'vt_img'=>$rec['vt_img'],
			'vt_img_alt'=>$rec['vt_img_alt'],
			'vt_heading'=>$rec['vt_heading'],
			'vt_url'=>$rec['vt_url'],
			'vt_slug'=>$rec['vt_slug'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
		];

		$query=$this->db->insert('tbl_virtual_tour',$data);
		if($query)
		{
			return true;
		}

		return false;
	}


	public function view_vt($id)
	{
		$query=$this->db->where('vt_id',$id)
		                ->get('tbl_virtual_tour');

	    if($query)
	    {
	    	return $query->row();
	    }

	    return false;

	}

	public function del_vt($id)
	{
		$query=$this->db->where('vt_id',$id)
		                ->delete('tbl_virtual_tour');

		if($query)
		{
			return true;
		}

		return false;

	}

		public function update_vt($rec,$id)
	{
		$data=[

			'vt_img'=>$rec['vt_img'],
			'vt_img_alt'=>$rec['vt_img_alt'],
			'vt_heading'=>$rec['vt_heading'],
			'vt_url'=>$rec['vt_url'],
			'vt_slug'=>$rec['vt_slug'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")

		];

		$query=$this->db->where('vt_id',$id)
		                ->update('tbl_virtual_tour',$data);

		if($query)
		{
			return true;
		}
		return false;
	}
}