<?php


class Meta_m extends CI_Model
{
	public function meta_tags($page)
	{
		$cond=['meta_slug'=>$page,'is_active'=>1];
		$query=$this->db->where($cond)
		                ->get('tbl_meta_tags');

		if(!empty($query))
		{
			return $query->row();
		}

		return false;

	}

	
}