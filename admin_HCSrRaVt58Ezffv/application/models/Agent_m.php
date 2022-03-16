<?php

class Agent_m extends CI_Model
{

	public function view()
	{
		$query=$this->db->select('ta.*,tl.first_name,tl.last_name')
		                ->from('tbl_agent as ta')
		                ->join('tbl_login as tl','ta.login_id=tl.login_id','left')
		                ->order_by('ta.agnt_id','desc')
		                ->get();
		if($query)
		{
			return $query->result_object();
		}
		
	}


	public function add_agent($rec)
	{
		$data=[

			'agnt_img'=>$rec['agnt_img'],
			'agnt_img_alt'=>$rec['agnt_img_alt'],
			'agnt_name'=>$rec['agnt_name'],
			'agnt_desg'=>$rec['agnt_desg'],
			'agnt_offc_number'=>$rec['agnt_offc_number'],
			'agnt_mob_number'=>$rec['agnt_mob_number'],
			'agnt_brn'=>$rec['agnt_brn'],
			'agnt_description'=>$rec['agnt_description'],
			'agnt_fb_link'=>$rec['agnt_fb_link'],
			'agnt_twitter_link'=>$rec['agnt_twitter_link'],
			'agnt_linkedin_link'=>$rec['agnt_linkedin_link'],
			'agnt_pinterest_link'=>$rec['agnt_pinterest_link'],
			'meta_title'=>$data['agnt_meta_title'],
			'meta_keyword'=>$data['agnt_meta_keyword'],
			'meta_description'=>$data['agntmeta_description'],
			'agnt_slug'=>$rec['agnt_slug'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
		];

		$query=$this->db->insert('tbl_agent',$data);
		if($query)
		{
			return true;
		}
		return false;

	}


	public function del_agent($del_id)
	{
		$query=$this->db->where('agnt_id',$del_id)
		                ->delete('tbl_agent');

		if($query)
		{
			return true;
		}               

		return false; 

	}


	public function unlink_img($id)
	{
		$query=$this->db->where('agnt_id',$id)
		                ->get('tbl_agent');                

		if($query)
		{
			return $query->row();
		}

		return false;
	}

	public function view_agent($id)
	{
		$query=$this->db->where('agnt_id',$id)
		                ->get('tbl_agent');                

		if($query)
		{
			return $query->row();
		}

		return false;
	}

	public function update_agnt($rec,$id)
	{


		$data=[

            'agnt_img'=>$rec['agnt_img'],
			'agnt_img_alt'=>$rec['agnt_img_alt'],
			'agnt_name'=>$rec['agnt_name'],
			'agnt_desg'=>$rec['agnt_desg'],
			'agnt_offc_number'=>$rec['agnt_offc_number'],
			'agnt_mob_number'=>$rec['agnt_mob_number'],
			'agnt_brn'=>$rec['agnt_brn'],
			'agnt_description'=>$rec['agnt_description'],
			'agnt_fb_link'=>$rec['agnt_fb_link'],
			'agnt_twitter_link'=>$rec['agnt_twitter_link'],
			'agnt_linkedin_link'=>$rec['agnt_linkedin_link'],
			'agnt_pinterest_link'=>$rec['agnt_pinterest_link'],
			'meta_title'=>$rec['agnt_meta_title'],
        	'meta_keyword'=>$rec['agnt_meta_keyword'],
        	'meta_description'=>$rec['agnt_meta_description'],
			'agnt_slug'=>$rec['agnt_slug'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
			
		];

		$query=$this->db->where('agnt_id',$id)
		                ->update('tbl_agent',$data);

		           
		 
		if($query)
		{
			return true;
		}               

		return false;



	}



}