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

}