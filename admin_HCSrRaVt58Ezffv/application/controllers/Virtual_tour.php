<?php


class Virtual_tour extends MY_Controller
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
		$data['tags']=$this->meta_m->meta_tags('manage-virtual-tour');
		$data['virtual_tour']=$this->virtualtour_m->view();
		$this->inner_template('pages/manage-virtual-tour.php',$data);
	}


	public function add()
	{

		if($this->form_validation->run('addvirtualtour')==true)
		{
			$post=$this->input->post();
			$config=[

				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg|png',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];

			$this->load->library('upload',$config);

			if($this->upload->do_upload('vt_img'))
			{
				$vt_img=$this->upload->data();
				$vt_img_name=$vt_img['raw_name'].$vt_img['file_ext'];
				$post['vt_img']=$vt_img_name;
				$add_vt=$this->virtualtour_m->add_virtualtour($post);
				if($add_vt)
				{
					$this->session->set_flashdata('msg','Virtual Tour has been added successfully !');
					return redirect('virtual-tour/manage');
				}

			}
			else
			{
				$data['upload_error']=$this->upload->display_errors();

			}


		}

		$data['tags']=$this->meta_m->meta_tags('add-virtual-tour');
		$this->inner_template('pages/add-virtual-tour',$data);
	}


		public function delete($del_id)
	{
		$vt_unlink=$this->virtualtour_m->view_vt($del_id);
		unlink('./uploads/'.$vt_unlink->vt_img.'');
		$del_vt=$this->virtualtour_m->del_vt($del_id);
		if($del_vt)
		{
		$this->session->set_flashdata('msg','Virtual Tour has been deleted successfully');
		return redirect('virtual-tour/manage');
		}

	}


		public function edit($id)
	{
		$data['tags']=$this->meta_m->meta_tags('edit-virtual-tour');
		$data['view_vt']=$this->virtualtour_m->view_vt($id);
		$this->inner_template('pages/edit-virtual-tour',$data);
	}


	public function update($id)
	{

		if($this->form_validation->run('updatevirtualtour')==true)
		{
		$post=$this->input->post();
		$config=[

				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];

			$this->load->library('upload',$config);
		if(!empty($_FILES['vt_img']['name']))
		{
			
			if($this->upload->do_upload('vt_img'))
			{
				unlink('./uploads/'.$post['vt_img_hidden'].'');
				$vt_img=$this->upload->data();
				$vt_img_name=$vt_img['raw_name'].$vt_img['file_ext'];
				$post['vt_img']=$vt_img_name;
				$update_status=1;
			}
			else
			{
				$data['upload_error']=$this->upload->display_errors();
				$data['tags']=$this->meta_m->meta_tags('edit-virtual-tour');
				$data['view_vt']=$this->virtualtour_m->view_vt($id);
				$this->inner_template('pages/edit-virtual-tour',$data);
				$update_status=0;
			}

		}
		else
		{
			$post['vt_img']=$post['vt_img_hidden'];
			$update_status=1;
		}

		
		if($update_status)
		{
			$update_vt=$this->virtualtour_m->update_vt($post,$id);
            if($update_vt)
            {
				$this->session->set_flashdata('msg','Virtual Tour has been updated successfully !');
				return redirect('virtual-tour/manage');
            }
			
		}
		}
		  else
	   {
	   	  $this->edit($id);
	   }

		



	}


}