<?php

class Special_offer_m extends CI_Model
{

	public function view_special_offer()
	{
		$query=$this->db->select('tso.*,tl.first_name,tl.last_name')
		                ->from('tbl_special_offer as tso')
		                ->join('tbl_login as tl','tso.login_id=tl.login_id','left')
		                ->order_by('tso.id','desc')
		                ->get();

		if($query)
		{
			return $query->result_object();
		}



		return false;
	}



	public function add_special_offer($data)
	{

		$add_rec=[

		'offer_img'=>$data['offer_img'],
		'offer_img_alt'=>$data['offer_img_alt'],
		'heading'=>$data['heading'],
		'project_url'=>$data['project_url'],
		'login_id'=>$_SESSION['login_id'],
		'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
		'updated_at'=>mdate("%Y-%m-%d %h:%i:%s"),
		'tstp'=>mdate("%Y-%m-%d %h:%i:%s")
		];

		$query=$this->db->insert('tbl_special_offer',$add_rec);
        
        if($query)
		{
			return true;
		}

		return false;
	}


	public function edit_special_offer($id)
	{
		$query=$this->db->where('id',$id)
		                ->get('tbl_special_offer');

		if($query)
		{
			return $query->row();
		}


	}

	public function select_special_offer($id)
	{
		$query=$this->db->where('id',$id)
		                ->get('tbl_special_offer');

		if($query)
		{
			return $query->row();
		}

	}


	public function update_special_offer($data,$id)
	{
        $blog_rec=[

        	'offer_img'=>$data['offer_img'],
        	'offer_img_alt'=>$data['offer_img_alt'],
        	'heading'=>$data['heading'],
        	'project_url'=>$data['project_url'],
        	'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s"),
			'tstp'=>mdate("%Y-%m-%d %h:%i:%s")
        ];
        
       

       
		$query=$this->db->where('id',$id)
		                ->update('tbl_special_offer',$blog_rec);
		                
		               

		if($query)
		{
			return true;
		}               

		return false; 

	}


	public function del_special_offer($del_id)
	{
		$query=$this->db->where('id',$del_id)
		                ->delete('tbl_special_offer');
		if($query)
		{
			return true;
		}

		return false;

	}






}