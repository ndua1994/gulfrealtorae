<?php


class Property extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('logged_in')))
		{
			return redirect('login');
		}
	}


	public function manage()
	{  
		$data['tags']=$this->meta_m->meta_tags('manage-property');
		$data['view_prop']=$this->prop_m->view_prop();
		$this->inner_template('pages/manage-property',$data);

	}


	public function add()
	{
		$config=[

			'upload_path'=>'./uploads/',
			'allowed_types'=>'jpg|jpeg|png|gif|pdf',
			'remove_spaces'=>TRUE,
			//'encrypt_name'=>TRUE
			];

			$this->load->library('upload',$config);
			$img_name='';

		$data['tags']=$this->meta_m->meta_tags('add-property');
		$data['view_comm']=$this->prop_m->view_comm();
		$data['view_prop_type']=$this->prop_m->view_prop_type();
       
        if($this->form_validation->run('addproperty'))
        {
        	$post=$this->input->post();
        	
			if($this->upload->do_upload('prop_img'))
			{
			$prop_img=$this->upload->data();
			$prop_img_path=$prop_img['raw_name'].$prop_img['file_ext'];
			$post['prop_img']=$prop_img_path;
			}
			else
			{
				$post['prop_img']='';
			}





			if($this->upload->do_upload('prop_dev_img'))
			{
			$prop_dev_img=$this->upload->data();
			$prop_dev_img_path=$prop_dev_img['raw_name'].$prop_dev_img['file_ext'];
			$post['prop_dev_img']=$prop_dev_img_path;
			}
			else
			{
				$post['prop_dev_img']='';
			}

			if($this->upload->do_upload('prop_brochure'))
			{
			$prop_brochure=$this->upload->data();
			$prop_brochure_path=$prop_brochure['raw_name'].$prop_brochure['file_ext'];
			$post['prop_brochure']=$prop_brochure_path;
			}
			else
			{
				$post['prop_brochure']='';
			}


			
			/*multiple property image upload starts*/

			$count=count($_FILES['prop_inner_img']['name']);
        	

			for($i=0;$i<$count;$i++)
			{
			$_FILES['file']['name'] = $_FILES['prop_inner_img']['name'][$i];
			$_FILES['file']['type'] = $_FILES['prop_inner_img']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['prop_inner_img']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['prop_inner_img']['error'][$i];
			$_FILES['file']['size'] = $_FILES['prop_inner_img']['size'][$i];

			$config['file_name'] = $_FILES['prop_inner_img']['name'][$i];
			if($this->upload->do_upload('file')){
			$uploadData = $this->upload->data();
			$filename = $uploadData['raw_name'].$uploadData['file_ext'];

			$img_name.=$filename.',';

			}

			}

        	$post['prop_inner_img']=rtrim($img_name, ',');


			/*multiple property image upload ends*/


        	$add_property=$this->prop_m->add_property($post);

        	/*insert floor plan starts*/

				$floor_plan_name=$this->input->post('floor_plan_name');
				$fp_data=array();
                foreach ($floor_plan_name as $key=>$value) 
                {


                	$count2=count($_FILES['floor_plan_img_'.($key).'']['name']);
                	$img_name2='';



	for($i=0;$i<$count2;$i++)
	{
	//echo $_FILES['floor_plan_img_'.($key).'']['name'][$i];

	$_FILES['file2']['name'] = $_FILES['floor_plan_img_'.($key).'']['name'][$i];
	$_FILES['file2']['type'] = $_FILES['floor_plan_img_'.($key).'']['type'][$i];
	$_FILES['file2']['tmp_name'] = $_FILES['floor_plan_img_'.($key).'']['tmp_name'][$i];
	$_FILES['file2']['error'] = $_FILES['floor_plan_img_'.($key).'']['error'][$i];
	$_FILES['file2']['size'] = $_FILES['floor_plan_img_'.($key).'']['size'][$i];
	$config['file_name2'] = $_FILES['floor_plan_img_'.($key).'']['name'][$i];

	if($this->upload->do_upload('file2'))
	{
	$uploadData2 = $this->upload->data();
	$filename2 = $uploadData2['raw_name'].$uploadData2['file_ext'];
	$img_name2.=$filename2.',';
	}

	}

	


       	$floor_imgs=rtrim($img_name2,',');
        
        			$floor_name=$this->input->post('floor_plan_name['.$key.']');
					$floor_size=$this->input->post('floor_plan_size['.$key.']');
					$floor_room=$this->input->post('floor_plan_room['.$key.']');
					$floor_bath=$this->input->post('floor_plan_bath['.$key.']');
					$floor_price=$this->input->post('floor_plan_price['.$key.']');	


					$row_arr=array(
					'prop_id'=>$add_property,
					'floor_name' => $floor_name,
					'floor_imgs' => $floor_imgs,
					'floor_size' =>  $floor_size,
					'floor_room' =>  $floor_room,
					'floor_bath' =>  $floor_bath,
					'floor_price' =>  $floor_price 
					);
					array_push($fp_data,$row_arr);
					$img_name='';
				
				}

				$add_floor_plan=$this->prop_m->add_floor_plan($fp_data);			
        		/*insert floor plan ends*/

        	
if($add_property)
{
$this->session->set_flashdata('msg','Property has been added successfully !');
return redirect('property/manage');
}

}

$this->inner_template('pages/add-property',$data);

}


	public function edit($id=null)
	{
		$data['tags']=$this->meta_m->meta_tags('edit-property');
		$data['view_comm']=$this->prop_m->view_comm();
		$data['view_prop_type']=$this->prop_m->view_prop_type();
		$data['prop_details']=$this->prop_m->prop_details($id);
		$data['prop_inner_images']=explode(',',$data['prop_details']->prop_inner_img);
		$this->inner_template('pages/edit-property',$data);
	}


	public function property_inner_image_del()
	{
		$prop_id=$this->input->post('prop_id');
		$prop_img=$this->input->post('prop_img');

		$prop_det=$this->prop_m->select_prop($prop_id);
		$prop_img_arr=explode(',',$prop_det->prop_inner_img);
		
		while(($i = array_search($prop_img, $prop_img_arr)) !== false) {
		unlink('./uploads/'.$prop_img_arr[$i].'');
		unset($prop_img_arr[$i]);
		}

		$prop_inner_img=implode(',', $prop_img_arr);
		
		$prop_inner_img_update=$this->prop_m->prop_inner_img_update($prop_id,$prop_inner_img);

		if($prop_inner_img_update)
		{
			$attr=array('status'=>'success');
		}
		else
		{
			$attr=array('status'=>'error','msg'=>'Error ! try after sometime');
		}

		echo json_encode($attr);



	}

	public function updated_property()
	{
		$data['prop_id']=$this->input->post('prop_id');
		$prop_inner_img=$this->prop_m->prop_inner_img_list($data);
		$data['prop_inner_img_arr']=explode(',',$prop_inner_img->prop_inner_img);

		$prop_inner_img_view=$this->load->view('ajax/prop_inner_img',$data,TRUE);
		$attr=array('rec'=>$prop_inner_img_view,'img_name'=>$prop_inner_img->prop_inner_img);
		echo json_encode($attr);

	}

	public function update($id=null)
	{

		$data['tags']=$this->meta_m->meta_tags('edit-property');
		$data['view_comm']=$this->prop_m->view_comm();
		$data['view_prop_type']=$this->prop_m->view_prop_type();
		$data['prop_details']=$this->prop_m->prop_details($id);
		$data['prop_inner_images']=explode(',',$data['prop_details']->prop_inner_img);

		$config=[

			'upload_path'=>'./uploads/',
			'allowed_types'=>'gif|jpg|jpeg|png|pdf',
			'encrypt_name'=>TRUE,
			'remove_spaces'=>TRUE
		];

		$this->load->library('upload',$config);
		$post=$this->input->post();
	
		if($this->form_validation->run('updateproperty'))
		{

			if($_FILES['prop_img']['name']!='')
			{

			if($this->upload->do_upload('prop_img'))
			{
			$prop_img=$this->upload->data();
			$prop_img_path=$prop_img['raw_name'].$prop_img['file_ext'];
			unlink('./uploads/'.$post['prop_img_hidden'].'');
			$post['prop_img']=$prop_img_path;
			$upload_status=1;
			}
			else
			{
			$data['upload_error']=$this->upload->display_errors();
			$data['tags']=$this->meta_m->meta_tags('edit-property');
			$data['prop_details']=$this->prop_m->prop_details($id);
			$this->inner_template('pages/edit-property',$data);
			$upload_status=0;

			}
			}
			else
			{
			$post['prop_img']=$this->input->post('prop_img_hidden');
			$upload_status=1;
			}



 

				if(!empty($_FILES['prop_inner_img']['name'][0]))
				{


					

			/*multiple property image upload starts*/

			
            $count=count($_FILES['prop_inner_img']['name']);
			for($i=0;$i<$count;$i++)
			{
			$_FILES['file']['name'] = $_FILES['prop_inner_img']['name'][$i];
			$_FILES['file']['type'] = $_FILES['prop_inner_img']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['prop_inner_img']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['prop_inner_img']['error'][$i];
			$_FILES['file']['size'] = $_FILES['prop_inner_img']['size'][$i];

			$config['file_name'] = $_FILES['prop_inner_img']['name'][$i];
			if($this->upload->do_upload('file')){
			$uploadData = $this->upload->data();
			$filename = $uploadData['raw_name'].$uploadData['file_ext'];
			$img_name.=$filename.',';
			}
			}


			$img_name_new=$this->input->post('prop_inner_img_hidden').','.$img_name;
			
        	$post['prop_inner_img']=trim($img_name_new, ',');
			/*multiple property image upload ends*/
			
			
			}
			else
			{
			$post['prop_inner_img']=$this->input->post('prop_inner_img_hidden');
			$upload_status=1;
			}






			if($_FILES['prop_dev_img']['name']!='')
			{

			if($this->upload->do_upload('prop_dev_img'))
			{
			$prop_dev_img=$this->upload->data();
			$prop_dev_img_path=$prop_dev_img['raw_name'].$prop_dev_img['file_ext'];
			unlink('./uploads/'.$post['prop_dev_img_hidden'].'');
		    $post['prop_dev_img']=$prop_dev_img_path;
			$upload_status=1;
			}
			else
			{
			$data['upload_error']=$this->upload->display_errors();
			$data['tags']=$this->meta_m->meta_tags('edit-property');
			$data['prop_details']=$this->prop_m->prop_details($id);
			$this->inner_template('pages/edit-property',$data);
			$upload_status=0;

			}
			}
			else
			{
			$post['prop_dev_img']=$this->input->post('prop_dev_img_hidden');
			$upload_status=1;
			}

			if($_FILES['prop_brochure']['name']!='')
			{

			if($this->upload->do_upload('prop_brochure'))
			{
			$prop_brochure=$this->upload->data();
			$prop_brochure_path=$prop_brochure['raw_name'].$prop_brochure['file_ext'];
			unlink('./uploads/'.$post['prop_brochure_hidden'].'');
			$post['prop_brochure']=$prop_brochure_path;
			$upload_status=1;
			}
			else
			{
			$data['upload_error']=$this->upload->display_errors();
			$data['tags']=$this->meta_m->meta_tags('edit-property');
			$data['prop_details']=$this->prop_m->prop_details($id);
			$this->inner_template('pages/edit-property',$data);
			$upload_status=0;
			}
			}
			else
			{
			$post['prop_brochure']=$this->input->post('prop_brochure_hidden');
			$upload_status=1;
			}

			if($upload_status)
			{
				$update_property=$this->prop_m->update_property($post,$id);
				if($update_property)
				{
					$this->session->set_flashdata('msg','Property has been updated successfully !');
					return redirect('property/manage');
				}
			}


		}

		$this->inner_template('pages/edit-property',$data);

	}


	public function floor_plan($id=null)
	{
		$data['tags']=$this->meta_m->meta_tags('manage-floorplan');
		$data['floor_plan']=$this->prop_m->floor_plan($id);
		$data['prop_id']=$id;
		

		$this->inner_template('pages/manage-floorplan',$data);

	}

	public function add_floor_plan($id)
	{
		$config=[

			'upload_path'=>'./uploads/',
			'allowed_types'=>'jpg|png|jpeg|gif',
			'remove_spaces'=>TRUE,
			'encrypt_name'=>TRUE

		];

		$this->load->library('upload',$config);


		if($this->form_validation->run('addfloorplan') && count($_FILES['floor_imgs']['name'])>=1)
		{

			$post=$this->input->post();
			$prop_id=$this->input->post('prop_id');
			/*multiple property image upload starts*/

			$count=count($_FILES['floor_imgs']['name']);
        	
        	$img_name='';

			for($i=0;$i<$count;$i++)
			{
			$_FILES['file']['name'] = $_FILES['floor_imgs']['name'][$i];
			$_FILES['file']['type'] = $_FILES['floor_imgs']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['floor_imgs']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['floor_imgs']['error'][$i];
			$_FILES['file']['size'] = $_FILES['floor_imgs']['size'][$i];

			$config['file_name'] = $_FILES['floor_imgs']['name'][$i];
			if($this->upload->do_upload('file')){
			$uploadData = $this->upload->data();
			$filename = $uploadData['raw_name'].$uploadData['file_ext'];

			$img_name.=$filename.',';

			}

			}

        	$post['floor_imgs']=rtrim($img_name, ',');

			/*multiple property image upload ends*/

			$add_floor_plans=$this->prop_m->add_floor_plans($post);

			if($add_floor_plans)
			{
				$this->session->set_flashdata('msgs','Floor Plan has been added successfully !');
				return redirect('property/floor-plan/'.$prop_id.'');
			}



		}
		else
		{
			$data['upload_error']=$this->upload->display_errors();
		}

		$data['tags']=$this->meta_m->meta_tags('add-floor-plan');
		$data['prop_id']=$id;
		$this->inner_template('pages/add-floor-plan',$data);

	}


	public function floor_plan_edit($edit)
	{
		$data['fp_details']=$this->prop_m->floor_plan_edit($edit);
		$data['tags']=$this->meta_m->meta_tags('edit-floor-plan');
		$this->inner_template('pages/edit-floor-plan',$data);
	}

	public function update_floor_plan()
	{


		$config=[

			'upload_path'=>'./uploads/',
			'allowed_types'=>'jpg|jpeg|png|gif',
			'remove_spaces'=>TRUE,
			'encrypt_name'=>TRUE


		];

		$this->load->library('upload',$config);

		$post=$this->input->post();
		$prop_id=$this->input->post('prop_id');
		

		/*multiple property image upload starts*/

			$count=count($_FILES['floor_imgs']['name']);
			if($count>1)
			{
			
			for($i=0;$i<$count;$i++)
			{

			$_FILES['file']['name'] = $_FILES['floor_imgs']['name'][$i];
			$_FILES['file']['type'] = $_FILES['floor_imgs']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['floor_imgs']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['floor_imgs']['error'][$i];
			$_FILES['file']['size'] = $_FILES['floor_imgs']['size'][$i];

			$config['file_name'] = $_FILES['floor_imgs']['name'][$i];
			if($this->upload->do_upload('file')){
			$uploadData = $this->upload->data();
			$filename = $uploadData['raw_name'].$uploadData['file_ext'];
			$img_name.=$filename.',';
			}

			}

        	$img_name_new=$this->input->post('prop_inner_img_hidden').','.$img_name;
			$post['floor_imgs']=trim($img_name_new, ',');
			}
			else
			{
				$post['floor_imgs']=$this->input->post('prop_inner_img_hidden');
			}



			
			$update_floor_plan=$this->prop_m->update_floor_plan($post);
			if($update_floor_plan)
			{
				return redirect('property/floor-plan/'.$prop_id.'');
			}

			/*multiple property image upload ends*/

		
	}

	public function floor_plan_delete($id=null)
	{
		$select_floor_plan=$this->prop_m->select_floor_plan($id);
		/*unlink image starts*/
		$fp_images=explode(',',$select_floor_plan->floor_imgs);
		foreach($fp_images as $img):
		unlink('./uploads/'.$img.'');
		endforeach;
		/*unlink image ends*/

		$del_floor_plan=$this->prop_m->del_floor_plan($id);
		if($del_floor_plan)
		{
			$this->session->set_flashdata('msg','Floor Plan has been deleted successfully !');
			return redirect('property/floor-plan/'.$select_floor_plan->prop_id.'');
		}


	}







	public function delete($del_id=null)
	{
		$select_prop=$this->prop_m->select_prop($del_id);
		$select_fp=$this->prop_m->select_fp($del_id);

	

		/*unlink image starts*/

		foreach ($select_fp as $fp) 
		{
		$fp_img=explode(',',$fp->floor_imgs);
		foreach($fp_img as $img)
		{
		unlink('./uploads/'.$img.'');
		}
		}

		unlink('./uploads/'.$select_prop->prop_img.'');
		$prop_inner_img_arr=explode(',',$select_prop->prop_inner_img);
		foreach($prop_inner_img_arr as $imgs)
		{
			unlink('./uploads/'.$imgs.'');
		}
		unlink('./uploads/'.$select_prop->prop_dev_img.'');
		unlink('./uploads/'.$select_prop->prop_brochure.'');
		/*unlink image ends*/
		$del_fp=$this->prop_m->del_fp($del_id);
		$del_prop=$this->prop_m->del_prop($del_id);
		if($del_prop)
		{
			$this->session->set_flashdata('msg','Property has been deleted successfully !');
			return redirect('property/manage');
		}
	}


	public function floorplan_img_del()
	{
		$prop_floorplan_id=$this->input->post('prop_floorplan_id');
		$prop_floorplan_img=$this->input->post('prop_floorplan_img');

		$fp_details=$this->prop_m->floor_plan_edit($prop_floorplan_id);
		$parts=explode(',',$fp_details->floor_imgs);

		while(($i=array_search($prop_floorplan_img,$parts))!==false)
		{
			 unlink('./uploads/'.$parts[$i].'');
			 unset($parts[$i]);
		}

		$update_fp_img=implode(',',$parts);

		$update_fpimg=$this->prop_m->update_fpimg($prop_floorplan_id,$update_fp_img);

		if($update_fpimg)
		{
			$attr=array('status'=>'success');
		}
		else
		{
            $attr=array('status'=>'error','msg'=>'Error ! try after sometime');
		}

		echo json_encode($attr);



	}


	public function floorplan_img_view()
	{
		$prop_floorplan_id=$this->input->post('prop_floorplan_id');
		$data['prop_id']=$prop_floorplan_id;
		$data['prop_floorplan_view']=$this->prop_m->prop_floorplan_view($prop_floorplan_id);

		$data['prop_floorplan_img_arr']=explode(',',$data['prop_floorplan_view']->floor_imgs);


		$prop_floorplan_rec=$this->load->view('ajax/prop_floorplan_view',$data,true);

		$attr=array('data'=>$prop_floorplan_rec,'img_name'=>$data['prop_floorplan_view']->floor_imgs);
		echo json_encode($attr);





	}

}