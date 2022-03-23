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
			'encrypt_name'=>TRUE
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
        	if($add_property)
        	{
        		$this->session->set_flashdata('msg','Property has been added successfully !');
			return redirect('property/manage');
        	}

        	
        }

      
        	$this->inner_template('pages/add-property',$data);
     
		
	}


	public function edit($id)
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

	public function update($id)
	{

		$data['tags']=$this->meta_m->meta_tags('edit-property');
		$data['view_comm']=$this->prop_m->view_comm();
		$data['view_prop_type']=$this->prop_m->view_prop_type();
		$data['prop_details']=$this->prop_m->prop_details($id);
		$data['prop_inner_images']=explode(',',$data['prop_details']->prop_inner_img);

		$config=[

			'upload_path'=>'./uploads/',
			'allowed_types'=>'gif|jpg|jpeg|png',
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
			$post['prop_dev_img']=$prop_dev_img;
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
			$post['prop_brochure']=$prop_brochure;
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




	public function delete($del_id)
	{
		$select_prop=$this->prop_m->select_prop($del_id);

		/*unlink image starts*/
		unlink('./uploads/'.$select_prop->prop_img.'');
		unlink('./uploads/'.$select_prop->prop_dev_img.'');
		unlink('./uploads/'.$select_prop->prop_brochure.'');
		/*unlink image ends*/
		$del_prop=$this->prop_m->del_prop($del_id);
		if($del_prop)
		{
			$this->session->set_flashdata('msg','Property has been deleted successfully !');
			return redirect('property/manage');
		}
	}
}