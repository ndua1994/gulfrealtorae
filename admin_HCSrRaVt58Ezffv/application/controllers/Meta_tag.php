<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Meta_tag extends MY_Controller
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
		$data['tags']=$this->meta_m->meta_tags('manage-meta');
		$data['meta_all']=$this->meta_m->meta_all();
		$this->inner_template('pages/manage-metatags',$data);
	}

	public function add()
	{
		if($this->form_validation->run('add_metatag')==true)
		{
			


			$data=$this->input->post();
			$add_meta=$this->meta_m->add_meta($data);
			if($add_meta)
			{
				$this->session->set_flashdata('msg','Record has been added successfully !');
				return redirect('meta-tag/manage');
			}


		}

		$data['tags']=$this->meta_m->meta_tags('add-meta');
		$this->inner_template('pages/add-metatags',$data);
	}


	public function edit($edit_id)
	{
		$data['tags']=$this->meta_m->meta_tags('edit-meta');
		$data['view_meta']=$this->meta_m->view_meta($edit_id);
		$this->inner_template('pages/edit-metatags',$data);
	}

	public function update($update_id)
	{

		if($this->form_validation->run('update_metatag')==true)
		{

			$data=$this->input->post();
			$update_meta=$this->meta_m->update_meta($data);
			if($update_meta)
			{
				$this->session->set_flashdata('msg','Record has been updated successfully !');
				return redirect('meta-tag/manage');
			}

		}

		$this->edit($update_id);
	}

	public function delete($del_id)
	{
		$del_meta=$this->meta_m->del_meta($del_id);
		if($del_meta)
		{
			$this->session->set_flashdata('msg','Record has been deleted successfully !');
			return redirect('meta-tag/manage');
		}
	}
}