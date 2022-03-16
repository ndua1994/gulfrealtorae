<?php


class specialOffer_m extends CI_Model
{

	public function view_special_offer($limit,$offset)
	{
		$query=$this->db->where('is_active',1)
		                ->limit($limit,$offset)
		                ->order_by('id','desc')
		                ->get('tbl_special_offer');




		if($query)
		{
			return $query->result();
		}

		return false;

	}

	public function latest_offer()
	{
		$query=$this->db->where('is_active','1')
		                ->order_by('id','desc')
		                ->limit(4)
		                ->get('tbl_special_offer');

		 

		if($query)
		{
			return $query->result();
		}

		return false;
	}

	public function num_rows()
	{
		$query=$this->db->where('is_active',1)
		                ->order_by('id','desc')
		                ->get('tbl_special_offer');

		if($query)
		{
			return $query->num_rows();
		}

		return false;
	}
}