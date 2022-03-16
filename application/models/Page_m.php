<?php


class Page_m extends CI_Model
{
	public function header_details()
	{
		$query=$this->db->where('is_active','1')
		                ->get('tbl_header_details');



		if($query)
		{
			return $query->row();
		}

		return false;
	}


	public function footer_details()
	{
		$query=$this->db->where('is_active','1')
		                ->get('tbl_footer_details');

		             

		if($query)
		{
			return $query->row();
		}

		return false;
	}
}