<?php

class Property_m extends CI_Model
{
	public function sale_property($limit,$offset)
	{
		$query=$this->db->where('prop_type_id',1)
		                ->limit($limit,$offset)
		                ->order_by('prop_id','desc')
		                ->get('tbl_property');



		if($query)
		{
			return $query->result();
		}

		return false;
	}


	public function sale_num_rows()
	{

		$query=$this->db->where('prop_type_id',1)
		                ->get('tbl_property');
		if($query)
		{
			return $query->num_rows();
		}

		return false;
	}
}