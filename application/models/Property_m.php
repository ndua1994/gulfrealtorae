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

	public function sale_num_rows($sort=null)
	{
	

		if($sort=='is_featured')
		{
          $query=$this->db->where('prop_type_id',1)
                        ->where('is_featured',1)
				                ->order_by('prop_id','desc')
				                ->get('tbl_property');
		}
		else if($sort=='')
		{
			$query=$this->db->where('prop_type_id',1)
		                ->order_by('prop_id','asc')
		                ->get('tbl_property');
		}
		else
		{
			$query=$this->db->where('prop_type_id',1)
		                ->order_by('prop_price',$sort)
		                ->get('tbl_property');
		}



		
		if($query)
		{
			return $query->num_rows();
		}

		return false;
	}


	public function sale_property_filter($sort,$limit,$offset)
	{
	

			if($sort=='is_featured')
		{
          $query=$this->db->where('prop_type_id',1)
                        ->where('is_featured',1)
                        ->limit($limit,$offset)
		                ->order_by('prop_id','desc')
		                ->get('tbl_property');
		}
		else if($sort=='')
		{
			$query=$this->db->where('prop_type_id',1)
			            ->limit($limit,$offset)
		                ->order_by('prop_price','asc')
		                ->get('tbl_property');
		}
		else
		{
			$query=$this->db->where('prop_type_id',1)
			            ->limit($limit,$offset)
		                ->order_by('prop_price',$sort)
		                ->get('tbl_property');
		}



		




		if($query)
		{
			return $query->result();
		}

		return false;

	}


	public function property_tags($det=null)
	{
		$cond=['prop_slug'=>$det,'is_active'=>1];
		$query=$this->db->select('meta_title,meta_keyword,meta_description')
		                ->where($cond)
		                ->get('tbl_property');

		if($query)
		{
			return $query->row();
		}

		return false;

	}

	public function property_detail($det=null)
	{
		$cond=['prop_slug'=>$det,'is_active'=>1];
		$query=$this->db->where($cond)
		                ->get('tbl_property');

		if($query)
		{
        return $query->row();
		}

		return false;
	}

  public function similar_property($det=null)
  {
  	$cond=['prop_type_id'=>1,'prop_slug!='=>$det,'is_active'=>1];
  	$query=$this->db->where($cond)
  	                ->get('tbl_property');

  	if($query)
  	{
  		 return $query->result();
  	}

  	return false;
  }
	


	
}