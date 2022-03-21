<?php

class VirtualTour_m extends CI_Model
{
	public function view_virtualtour()
	{
		$query=$this->db->where('is_active','1')
		                ->order_by('vt_id','DESC')
		                ->get('tbl_virtual_tour');



		if($query)
		{
			return $query->result();
		}

		return false;
	}


	public function view_paging($limit,$offset)
	{
		$query=$this->db->where('is_active',1)
		                ->limit($limit,$offset)
		                ->order_by('vt_id','desc')
		                ->get('tbl_virtual_tour');


		if($query)
		{
			return $query->result();
		}

		return false;

	}


	public function num_rows()
	{
		$query=$this->db->where('is_active','1')
		                ->get('tbl_virtual_tour');
		if($query)
		{
			return $query->num_rows();
		}

		return false;
	}

		public function contact_form($data)
{
	
	$rec=[
		'name'=>$data['name'],
		'email'=>$data['email'],
		'mobile'=>$data['virtual_tour_hidden'].$data['mobile'],
		'comment'=>$data['comment'],
		'is_active'=>1
	];

	$query=$this->db->insert('tbl_virtual_tour_frm',$rec);

	if($query)
	{
		return true;
	}

	return false;

}

}