<?php

class Community extends MY_Controller
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
		$data['tags']=$this->meta_m->meta_tags('manage-community');
		$data['community']=$this->comm_m->view();
		$this->inner_template('pages/manage-community',$data);
	}


	public function add()
	{

		$config=[

				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg|png',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];

			$this->load->library('upload',$config);

		if($this->form_validation->run('addcommunity') && $this->upload->do_upload('comm_img'))
		{
			$post=$this->input->post();
			/*get iframe url starts*/
			$post['comm_map']=$this->getmap($post['comm_map']);
			/*get iframe url ends*/


			$comm_img=$this->upload->data();
			$comm_img_name=$comm_img['raw_name'].$comm_img['file_ext'];
			$post['comm_img']=$comm_img_name;

			if(!empty($this->upload->do_upload('comm_inner_img')))
			{
				$comm_inner_img=$this->upload->data();
				$comm_inner_img_name=$comm_inner_img['raw_name'].$comm_inner_img['file_ext'];
				$post['comm_inner_img']=$comm_inner_img_name;
			}


			$add_comm=$this->comm_m->add_comm($post);
			if($add_comm)
			{
			$this->session->set_flashdata('msg','Community has been added successfully !');
			return redirect('community/manage');
			}


		}
		else
		{
			$data['upload_error']=$this->upload->display_errors();
		}

		$data['tags']=$this->meta_m->meta_tags('add-community');
		$this->inner_template('pages/add-community',$data);
	}


	public function delete($del_id)
	{
		$comm_unlink=$this->comm_m->view_comm($del_id);
		unlink('./uploads/'.$comm_unlink->comm_img.'');
		unlink('./uploads/'.$comm_unlink->comm_inner_img.'');
		$del_comm=$this->comm_m->del_comm($del_id);
		if($del_comm)
		{
		$this->session->set_flashdata('msg','Community has been deleted successfully');
		return redirect('community/manage');
		}

	}

	public function edit($id)
	{
		$data['tags']=$this->meta_m->meta_tags('edit-community');
		$data['view_comm']=$this->comm_m->view_comm($id);
		$this->inner_template('pages/edit-community',$data);
	}

	

	public function update($id)
	{
		$config=[

				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];

			$this->load->library('upload',$config);
			$post=$this->input->post();

			/*get iframe url starts*/
			$post['comm_map']=$this->getmap($post['comm_map']);
			/*get iframe url ends*/


		if($this->form_validation->run('updatecommunity')==true)
		{
		
		

			
		if(!empty($_FILES['comm_img']['name']))
		{
			
			if($this->upload->do_upload('comm_img'))
			{
				unlink('./uploads/'.$post['comm_img_hidden'].'');
				$comm_img=$this->upload->data();
				$comm_img_name=$comm_img['raw_name'].$comm_img['file_ext'];
				$post['comm_img']=$comm_img_name;
				$update_status=1;
			}
			else
			{
				$data['upload_error']=$this->upload->display_errors();
				$data['tags']=$this->meta_m->meta_tags('edit-community');
				$data['view_comm']=$this->comm_m->view_comm($id);
				$this->inner_template('pages/edit-community',$data);
				$update_status=0;
			}

		}
		else
		{
			$post['comm_img']=$post['comm_img_hidden'];
			$update_status=1;
		}


		if(!empty($_FILES['comm_inner_img']['name']))
		{
			
			if($this->upload->do_upload('comm_inner_img'))
			{
				unlink('./uploads/'.$post['comm_inner_img_hidden'].'');
				$comm_inner_img=$this->upload->data();
				$comm_inner_img_name=$comm_inner_img['raw_name'].$comm_inner_img['file_ext'];
				$post['comm_inner_img']=$comm_inner_img_name;
				$update_status=1;
			}
			else
			{
				$data['upload_error']=$this->upload->display_errors();
				$data['tags']=$this->meta_m->meta_tags('edit-community');
				$data['view_comm']=$this->comm_m->view_comm($id);
				$this->inner_template('pages/edit-community',$data);
				$update_status=0;
			}

		}
		else
		{
			$post['comm_inner_img']=$post['comm_inner_img_hidden'];
			$update_status=1;
		}

		
		if($update_status)
		{
			$update_comm=$this->comm_m->update_comm($post,$id);
            if($update_comm)
            {
				$this->session->set_flashdata('msg','Community has been updated successfully !');
				return redirect('community/manage');
            }
			
		}
		}
		else
	   {
	   	  $this->edit($id);
	   }


	}

	public function getmap($url=null)
	{
		preg_match('/src="([^"]+)"/', $url, $match);
		return $match[1];

	}

}