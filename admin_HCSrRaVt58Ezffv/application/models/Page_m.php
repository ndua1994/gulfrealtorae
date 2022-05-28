<?php


class Page_m extends CI_Model
{


public function update_contctus($data)
{
	$rec=[

		'contct_heading'=>$data['contct_heading'],
		'contct_short_descp'=>$data['contct_short_descp'],
		'contct_number'=>$data['contct_number'],
		'contct_website'=>$data['contct_website'],
		'contct_email'=>$data['contct_email'],
		'contct_gmap'=>$data['contct_gmap'],
		'login_id'=>$_SESSION['login_id'],
		'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
		'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
	];

	$query=$this->db->update('tbl_contact',$rec);
	if($query)
	{
		return true;
	}

	return false;
}

public function contact_det()
{
	$query=$this->db->select('tc.*,tl.first_name,tl.last_name')
		                ->from('tbl_contact as tc')
		                ->join('tbl_login as tl','tc.login_id=tl.login_id','left')
		                ->get();
	if($query)
	{
		return $query->row();
	}

	return false;
}


public function about_det()
{
	$query=$this->db->select('tau.*,tl.first_name,tl.last_name')
		                ->from('tbl_about_us as tau')
		                ->join('tbl_login as tl','tau.login_id=tl.login_id','left')
		                ->get();

	if($query)
	{
		return $query->row();
	}

	return false;
}


public function home_det()
{
	$query=$this->db->select('th.*,tl.first_name,tl.last_name')
		                ->from('tbl_home as th')
		                ->join('tbl_login as tl','th.login_id=tl.login_id','left')
		                ->get();


	if($query)
	{
		return $query->row();
	}

	return false;
}


public function update_aboutus($data)
{
	$rec=[

		'abt_img'=>$data['abt_img'],
		'abt_img_alt'=>$data['abt_img_alt'],
		'abt_description'=>$data['abt_description'],
		'login_id'=>$_SESSION['login_id'],
		'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
		'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
	
	];
	$query=$this->db->update('tbl_about_us',$rec);
	if($query)
	{
		return true;
	}

	return false;
}

public function update_home($data)
{
	$rec=[

		'home_img'=>$data['home_img'],
		'home_img_alt'=>$data['home_img_alt'],
		'home_heading'=>$data['home_heading'],
		'login_id'=>$_SESSION['login_id'],
		'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
		'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
	
	];
	$query=$this->db->update('tbl_home',$rec);
	if($query)
	{
		return true;
	}

	return false;
}


public function header_details()
{
	$query=$this->db->select('th.*,tl.first_name,tl.last_name')
		                ->from('tbl_header_details as th')
		                ->join('tbl_login as tl','th.login_id=tl.login_id','left')
		                ->get();

	if($query)
	{
		return $query->row();
	}

	return false;
}

public function update_headersection($data)
{
	$rec=[

		'logo_img'=>$data['logo_img'],
		'logo_img_alt'=>$data['logo_img_alt'],
		'mobile_no'=>$data['mobile_no'],
		'whatsapp_no'=>$data['whatsapp_no'],
		'login_id'=>$_SESSION['login_id'],
		'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
		'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
	
	];
	$query=$this->db->update('tbl_header_details',$rec);
	if($query)
	{
		return true;
	}

	return false;
}

public function footer_details()
{
		$query=$this->db->select('tf.*,tl.first_name,tl.last_name')
		                ->from('tbl_footer_details as tf')
		                ->join('tbl_login as tl','tf.login_id=tl.login_id','left')
		                ->get();
	if($query)
	{
		return $query->row();
	}

	return false;
}


public function update_footersection($data)
{
	$rec=[
		'footer_logo_img'=>$data['footer_logo_img'],
		'footer_logo_img_alt'=>$data['footer_logo_img_alt'],
		'description'=>$data['description'],
		'fb_link'=>$data['fb_link'],
		'twitter_link'=>$data['twitter_link'],
		'insta_link'=>$data['insta_link'],
		'copyright_text'=>$data['copyright_text'],
		'login_id'=>$_SESSION['login_id'],
		'is_active'=>(!empty($data['is_active']) ? '1' : '2'),
		'updated_at'=>mdate("%Y-%m-%d %h:%i:%s")
	];

	$query=$this->db->update('tbl_footer_details',$rec);

	if($query)
	{
		return true;
	}

	return false;
}



}