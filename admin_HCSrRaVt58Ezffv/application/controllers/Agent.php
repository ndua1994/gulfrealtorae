<?php

class agent extends MY_Controller
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
		$data['tags']=$this->meta_m->meta_tags('manage-agent');
		$data['agent']=$this->agent_m->view();
		$this->inner_template('pages/manage-agent',$data);
	}

	public function add()
	{

		if($this->form_validation->run('addagnt')==true)
		{
			$post=$this->input->post();
			$config=[

				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg|png',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];

			$this->load->library('upload',$config);

			if($this->upload->do_upload('agnt_img'))
			{
				$agnt_img=$this->upload->data();
				$agnt_img_name=$agnt_img['raw_name'].$agnt_img['file_ext'];
				$post['agnt_img']=$agnt_img_name;

				$add_agent=$this->agent_m->add_agent($post);
				if($add_agent)
				{
					$this->session->set_flashdata('msg','Agent has been added successfully !');
					return redirect('agent/manage');
				}
			}
			else
			{
				$data['upload_error']=$this->upload->display_errors();
			}



		}
		$data['tags']=$this->meta_m->meta_tags('add-agent');
		$this->inner_template('pages/add-agent',$data);
	
	}

	public function delete($del_id)
	{
		$unlink_img=$this->agent_m->unlink_img($del_id);
		unlink('./uploads/'.$unlink_img->agnt_img);
		$del_agent=$this->agent_m->del_agent($del_id);
		if($del_agent)
		{
			$this->session->set_flashdata('msg','Agent has been deleted successfully');
			return redirect('agent/manage');
		}
	}

	public function edit($edit_id)
	{
		$data['tags']=$this->meta_m->meta_tags('edit-agent');
		$data['view_agent']=$this->agent_m->view_agent($edit_id);
		$this->inner_template('pages/edit-agent',$data);

	}

	public function update($id)
	{

		if($this->form_validation->run('updateagnt')==true)
		{
			$post=$this->input->post();
			$config=[

				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg|png',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];

			$this->load->library('upload',$config);

			if(!empty($_FILES['agnt_img']['name']))
			{
				if($this->upload->do_upload('agnt_img'))
				{
					unlink('./uploads/'.$post['agnt_img_hidden']);
					$agnt_img=$this->upload->data();
					$agnt_img_name=$agnt_img['raw_name'].$agnt_img['file_ext'];
					$post['agnt_img']=$agnt_img_name;
					$update_status=1;
                }
				else
				{
					$data['upload_error']=$this->upload->display_errors();
					$data['tags']=$this->meta_m->meta_tags('edit-agent');
		            $data['view_agent']=$this->agent_m->view_agent($id);
					$this->inner_template('pages/edit-agent',$data);
					$update_status=0;
				}

			}
			else
			{
				$post['agnt_img']=$post['agnt_img_hidden'];
				$update_status=1;
			}

			
		    if($update_status)
		    {
				$update_agnt=$this->agent_m->update_agnt($post,$id);
				if($update_agnt)
				{
				$this->session->set_flashdata('msg','Agent has been updated successfully !');
				return redirect('agent/manage');
				}
		    }

		}
		  else
	   {
	   	  $this->edit($id);
	   }



	}




}