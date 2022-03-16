<?php

class Upload_image extends MY_Controller
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
			$data['tags']=$this->meta_m->meta_tags('manage-image');
			$data['upload_image']=$this->upload_img_m->view();
		    $this->inner_template('pages/manage-image',$data);
	}


	public function add()
	{


		   if(count($this->input->post())!=0)
		   {

		    $post=$this->input->post();
			$config=[
				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg|png',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];

			$this->load->library('upload',$config);

			if($this->upload->do_upload('upload_img'))
			{
				$upload_img=$this->upload->data();
				$upload_img_name=$upload_img['raw_name'].$upload_img['file_ext'];
				$post['upload_img']=$upload_img_name;

				$add_upload_img=$this->upload_img_m->upload_image($post);
				if($add_upload_img)
				{
					$this->session->set_flashdata('msg','Image has been added successfully !');
					return redirect('upload-image/manage');
				}
			 }
			else
			{
			    $data['upload_error']=$this->upload->display_errors();
			}
		   }
	
			
			$data['tags']=$this->meta_m->meta_tags('add-image');
		    $this->inner_template('pages/add-image',$data);
			
	}


	public function edit($edit_id)
	{
		$data['tags']=$this->meta_m->meta_tags('edit-image');
		$data['view_image']=$this->upload_img_m->view_image($edit_id);
		$this->inner_template('pages/edit-image',$data);

	}

	public function update($id)
	{

		if(count($this->input->post())!=0)
		{
			$post=$this->input->post();
			$config=[

				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg|png',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];

			$this->load->library('upload',$config);

			if(!empty($_FILES['upload_img']['name']))
			{
				if($this->upload->do_upload('upload_img'))
				{
					unlink('./uploads/'.$post['upload_img_hidden']);
					$upload_img=$this->upload->data();
					$upload_img_name=$upload_img['raw_name'].$upload_img['file_ext'];
					$post['upload_img']=$upload_img_name;
					$update_status=1;
                }
				else
				{
					$data['upload_error']=$this->upload->display_errors();
					$data['tags']=$this->meta_m->meta_tags('edit-agent');
		            $data['view_image']=$this->upload_img_m->view_image($id);
					$this->inner_template('pages/edit-image',$data);
					$update_status=0;
				}

			}
			else
			{
				$post['upload_img']=$post['upload_img_hidden'];
				$update_status=1;
			}

			
		    if($update_status)
		    {
				$update_image=$this->upload_img_m->update_image($post,$id);
				if($update_image)
				{
				$this->session->set_flashdata('msg','Image has been updated successfully !');
				return redirect('upload-image/manage');
				}
		    }

		}
		  else
	   {
	   	  $this->edit($id);
	   }



	}


		public function delete($del_id)
	{
		$unlink_img=$this->upload_img_m->unlink_img($del_id);
		unlink('./uploads/'.$unlink_img->upload_img);
		$del_agent=$this->upload_img_m->del_image($del_id);
		if($del_agent)
		{
			$this->session->set_flashdata('msg','Image has been deleted successfully');
			return redirect('upload-image/manage');
		}
	}



}