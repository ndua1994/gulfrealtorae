<?php


class upload_img_m extends CI_Model
{
	public function upload_image($rec)
	{
		$data=[
			'upload_img'=>$rec['upload_img'],
			'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
		];

		$upload_image=$this->db->insert('tbl_upload_image',$data);
		if($upload_image)
		{
			return true;
		}

		return false;
	}

	public function view()
	{
		$query=$this->db->select('tum.*,tl.first_name,tl.last_name')
		                ->from('tbl_upload_image as tum')
		                ->join('tbl_login as tl','tum.login_id=tl.login_id','left')
		                ->order_by('tum.upload_id','desc')
		                ->get();
		if($query)
		{
			return $query->result_object();
		}

		return false;
	}

	public function view_image($id)
	{
		$query=$this->db->where('upload_id',$id)
		                ->get('tbl_upload_image');                

		if($query)
		{
			return $query->row();
		}

		return false;
	}


	public function unlink_img($id)
	{
		$query=$this->db->where('upload_id',$id)
		                ->get('tbl_upload_image');                

		if($query)
		{
			return $query->row();
		}

		return false;
	}

	public function del_image($del_id)
	{
		$query=$this->db->where('upload_id',$del_id)
		                ->delete('tbl_upload_image');

		if($query)
		{
			return true;
		}               

		return false; 

	}


	public function update_image($rec,$id)
	{
		$data=[

            'upload_img'=>$rec['upload_img'],
            'login_id'=>$_SESSION['login_id'],
			'is_active'=>(!empty($rec['is_active']) ? '1' : '2'),
			'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
		];

		$query=$this->db->where('upload_id',$id)
		                ->update('tbl_upload_image',$data);

		 
		if($query)
		{
			return true;
		}               

		return false;



	}
}