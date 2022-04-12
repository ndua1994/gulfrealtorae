<?php

class Prop_m extends CI_Model
{
	public function view_prop()
	{
		$query=$this->db->select('tp.*,tl.first_name,tl.last_name,tc.comm_heading as comm_name,tpt.prop_type_name')
		->from('tbl_property as tp')
		->join('tbl_community as tc','tp.comm_id=tc.comm_id','left')
		->join('tbl_prop_type as tpt','tp.prop_type_id=tpt.prop_type_id','left')
		->join('tbl_login as tl','tp.login_id=tl.login_id','left')
		->get();

		if($query)
		{
			return $query->result();
		}

		return false;
	}


	public function view_comm()
	{
		$query=$this->db->order_by('comm_heading')
		                ->where('is_active','1')
		                ->get('tbl_community');

		if($query)
		{
			return $query->result();
		}

		return false;
	}


	public function view_prop_type()
	{
		$query=$this->db->order_by('prop_type_name')
		                ->where('is_active','1')
		                ->get('tbl_prop_type');


		if($query)
		{
			return $query->result();
		}

		return false;
	}


	public function add_property($rec)
	{

		$data=[

			'comm_id'=>$rec['comm_id'],
			'prop_type_id'=>$rec['prop_type_id'],
			'prop_img'=>$rec['prop_img'],
			'prop_img_alt'=>$rec['prop_img_alt'],
			'prop_inner_img'=>$rec['prop_inner_img'],
			'prop_dev_img'=>$rec['prop_dev_img'],
			'prop_dev_img_alt'=>$rec['prop_dev_img_alt'],
			'prop_name'=>$rec['prop_name'],
			'prop_price'=>$rec['prop_price'],
			'prop_beds'=>$rec['prop_beds'],
			'prop_sqfeet'=>$rec['prop_sqfeet'],
			'prop_addr'=>$rec['prop_addr'],
			'prop_brochure'=>$rec['prop_brochure'],
			'prop_descp'=>$rec['prop_descp'],
			'prop_details'=>$rec['prop_details'],
			'prop_feature'=>$rec['prop_feature'],
			'prop_loc_descp'=>$rec['prop_loc_descp'],
			'prop_loc_map'=>$rec['prop_loc_map'],
			'is_featured'=>$rec['is_featured'],
			'prop_slug'=>$rec['prop_slug'],
			'login_id'=>$this->session->userdata('login_id'),
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s"),
			'tstp'=>mdate("%Y-%m-%d %h:%i:%s")
		];

		$query=$this->db->insert('tbl_property',$data);
		if($query)
		{
			return true;
		}

		return false;

	}


	public function select_prop($id)
	{
		$query=$this->db->where('prop_id',$id)
		                ->get('tbl_property');

		if($query)
		{
			return $query->row();
		}
	}


	public function prop_details($id)
	{
		$query=$this->db->where('prop_id',$id)
		                ->get('tbl_property');

		if($query)
		{
			return $query->row();
		}

		return false;
	}

	public function prop_inner_img_update($id,$inner_img)
	{
		$rec=['prop_inner_img'=>$inner_img];

		$query=$this->db->where('prop_id',$id)
		                ->update('tbl_property',$rec);
                

		 if($query)
		 {
		 	return true;
		 }   

		 return false;            

	}


	public function prop_inner_img_list($rec)
	{
		$id=$rec['prop_id'];
		$query=$this->db->select('prop_inner_img')
		                ->where('prop_id',$id)
		                ->get('tbl_property');

		 if($query)
		 {
		 	return $query->row();
		 }  

		 return false;             

	}

	public function update_property($data,$id)
	{
		 $prop_rec=[

        	'comm_id'=>$data['comm_id'],
        	'prop_type_id'=>$data['prop_type_id'],
        	'prop_img'=>$data['prop_img'],
        	'prop_img_alt'=>$data['prop_img_alt'],
        	'prop_inner_img'=>$data['prop_inner_img'],
        	'prop_dev_img'=>$data['prop_dev_img'],
        	'prop_dev_img_alt'=>$data['prop_dev_img_alt'],
        	'prop_name'=>$data['prop_name'],
        	'prop_price'=>$data['prop_price'],
        	'prop_beds'=>$data['prop_beds'],
        	'prop_sqfeet'=>$data['prop_sqfeet'],
        	'prop_addr'=>$data['prop_addr'],
        	'prop_brochure'=>$data['prop_brochure'],
        	'prop_details'=>$data['prop_details'],
			'prop_feature'=>$data['prop_feature'],
			'prop_loc_descp'=>$data['prop_loc_descp'],
			'prop_loc_map'=>$data['prop_loc_map'],
			'is_featured'=>$data['is_featured'],
			'prop_slug'=>$data['prop_slug'],
			'login_id'=>$this->session->userdata('login_id'),
			'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s"),
			'tstp'=>mdate("%Y-%m-%d %h:%i:%s")
        ];
        
       

       
		$query=$this->db->where('prop_id',$id)
		                ->update('tbl_property',$prop_rec);

		
		                
		               

		if($query)
		{
			return true;
		}               

		return false; 
	}




	public function del_prop($id)
	{
		$query=$this->db->where('prop_id',$id)
		                ->delete('tbl_property');
		if($query)
		{
			return true;
		}

		return false;
	}
}