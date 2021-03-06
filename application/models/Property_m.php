<?php

class Property_m extends CI_Model
{

	public function search_content()
	{

		$query=$this->db->where('is_active',1)
		                ->get('tbl_home');

		               
		if($query)
		{
			 return $query->row();
		}

		return false;

	}


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

	public function featured_listing()
	{
		$data=[
			'is_featured'=>1,
			'is_active'=>1
		];
		
		$query=$this->db->where($data)
		                ->order_by('prop_id','desc')
		                ->limit(4)
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
		                ->order_by('prop_id','desc')
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


	public function home_num_rows($sort=null)
	{
	

		if($sort=='is_featured')
		{
          $query=$this->db->where('is_featured',1)
				                ->order_by('prop_id','desc')
				                ->get('tbl_property');
		}
		else if($sort=='')
		{
			$query=$this->db->order_by('prop_id','desc')
		                ->get('tbl_property');
		}
		else
		{
			$query=$this->db->order_by('prop_price',$sort)
		                ->get('tbl_property');
		}



		
		if($query)
		{
			return $query->num_rows();
		}

		return false;
	}


	public function rent_num_rows($sort=null)
	{
	

		if($sort=='is_featured')
		{
          $query=$this->db->where('prop_type_id',2)
                        ->where('is_featured',1)
				                ->order_by('prop_id','desc')
				                ->get('tbl_property');
		}
		else if($sort=='')
		{
			$query=$this->db->where('prop_type_id',2)
		                ->order_by('prop_id','desc')
		                ->get('tbl_property');
		}
		else
		{
			$query=$this->db->where('prop_type_id',2)
		                ->order_by('prop_price',$sort)
		                ->get('tbl_property');
		}



		
		if($query)
		{
			return $query->num_rows();
		}

		return false;
	}


		public function offplan_num_rows($sort=null)
	{
	

		if($sort=='is_featured')
		{
          $query=$this->db->where('prop_type_id',3)
                        ->where('is_featured',1)
				                ->order_by('prop_id','desc')
				                ->get('tbl_property');
		}
		else if($sort=='')
		{
			$query=$this->db->where('prop_type_id',3)
		                ->order_by('prop_id','desc')
		                ->get('tbl_property');
		}
		else
		{
			$query=$this->db->where('prop_type_id',3)
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
		                ->order_by('prop_price','desc')
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


	public function home_property_filter($sort)
	{
	

			if($sort=='is_featured')
		{
          $query=$this->db->where('is_featured',1)
													->limit(3)
													->order_by('prop_id','desc')
													->get('tbl_property');
		}
		else if($sort=='')
		{
			$query=$this->db->limit(3)
											->order_by('prop_price','desc')
											->get('tbl_property');
		}
		else
		{
			$query=$this->db->limit(3)
											->order_by('prop_price',$sort)
											->get('tbl_property');
		}

		



		if($query)
		{
			return $query->result();
		}

		return false;

	}

	public function rent_property_filter($sort,$limit,$offset)
	{
	

			if($sort=='is_featured')
		{
          $query=$this->db->where('prop_type_id',2)
                        ->where('is_featured',1)
                        ->limit($limit,$offset)
		                ->order_by('prop_id','desc')
		                ->get('tbl_property');
		}
		else if($sort=='')
		{
			$query=$this->db->where('prop_type_id',2)
			            ->limit($limit,$offset)
		                ->order_by('prop_price','desc')
		                ->get('tbl_property');
		}
		else
		{
			$query=$this->db->where('prop_type_id',2)
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


		public function offplan_property_filter($sort,$limit,$offset)
	{
	

			if($sort=='is_featured')
		{
          $query=$this->db->where('prop_type_id',3)
													->where('is_featured',1)
													->limit($limit,$offset)
													->order_by('prop_id','desc')
													->get('tbl_property');
		}
		else if($sort=='')
		{
			$query=$this->db->where('prop_type_id',3)
											->limit($limit,$offset)
											->order_by('prop_price','desc')
											->get('tbl_property');
		}
		else
		{
			$query=$this->db->where('prop_type_id',3)
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


  public function floor_plan_detail($det)
	{
		$query=$this->db->where('prop_id',$det)
		                ->get('tbl_prop_floorplan');

		if($query)
		{
			return $query->result();
		}

		return false;

	}



  public function enquiry_form($data)
  {
  	$rec=[

  		'prop_id'=>$data['prop_id'],
  		'schedule_date'=>$data['schedule_date'],
  		'schedule_time'=>$data['schedule_time'],
  		'prop_name'=>$data['name'],
  		'prop_email'=>$data['email_id'],
  		'prop_message'=>$data['message'],
  		'is_active'=>1
  	];


  	$query=$this->db->insert('tbl_prop_frm',$rec);
  	if($query)
  	{
  		  return true;
  	}

  	return false;



  }

  public function sale_property_download_brochure_form($data)
  {
  	$rec=[

  		'prop_id'=>$data['prop_id'],
  		'name'=>$data['name'],
  		'email'=>$data['email'],
  		'mobile'=>$data['mobile'],
  		'is_active'=>1
  	];


  	$query=$this->db->insert('tbl_sale_prop_brochure_frm',$rec);
  	if($query)
  	{
  		  return true;
  	}

  	return false;



  }

  public function latest_property()
  {
  	 $query=$this->db->where('is_active',1)
  	                 ->order_by('prop_id','desc')
  	                 ->limit(3)
  	                 ->get('tbl_property');

  	           

  	  if($query)
  	  {
  	  	return $query->result();
  	  }

  	  return false;
  }

  public function searh_count($rec)
  {
  	$query=$this->db->select('count(*) as total')
  	                ->like('prop_name',$rec)
  	                ->where('is_active',1)
  	                ->get('tbl_property');



  	 if($query)
  	 {

  	 	return $query->result();

  	 }

  	 return false;
  }
	
	 public function search_prop($rec)
  {
  	$query=$this->db->like('prop_name',$rec)
  	                ->where('is_active',1)
  	                ->get('tbl_property');



  	 if($query)
  	 {

  	 	return $query->result();

  	 }

  	 return false;
  }
	


	
}