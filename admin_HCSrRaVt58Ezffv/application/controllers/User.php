<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata('logged_in')))
		{
			return redirect('login');
		}
		else if($this->session->userdata('login_type_id')==2)
		{
			return redirect('login/dashboard');
		}
	
	}


	public function manage()
	{


		$data['tags']=$this->meta_m->meta_tags('manage-user');
		$data['users']=$this->user_m->user_list();
		$this->inner_template('pages/manage-users',$data);

	}

	public function add()
	{
		

		if($this->form_validation->run('adduser')==true)
		{
			$data=array(

			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'login_type_id'=>'2',
			'is_active'=>(!empty($this->input->post('is_active')) ? '1':'2')
			);

			$add_user=$this->user_m->add_user($data);
			if($add_user)
			{
				$this->session->set_flashdata('msg','Record has been added successfully !');
				return redirect('user/manage');
			}


		}

		$data['tags']=$this->meta_m->meta_tags('add-user');
		$this->inner_template('pages/add-users',$data);

	}

	public function edit($edit_id)
	{
		$data['view_user']=$this->user_m->view_user($edit_id);
		$data['tags']=$this->meta_m->meta_tags('edit-user');
		$this->inner_template('pages/edit-users',$data);

	}

	public function update($update_id)
	{
		if($this->form_validation->run('edit_user')==true)
		{

			$data=array(

				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'is_active'=>(!empty($this->input->post('is_active')) ? '1':'2'),
				'id'=>$this->input->post('edit_id')

			);

			$update_user=$this->user_m->update_user($data);
			if($update_user)
			{
				$this->session->set_flashdata('msg','Record has been updated successfully !');
				return redirect('user/manage');
			}



		}

		$this->edit($update_id);

	}

	public function delete($del_id)
	{
		$del_rec=$this->user_m->del_user($del_id);
		if($del_rec)
		{
			$this->session->set_flashdata('msg','Record has been deleted successfully !');
			return redirect('user/manage');
		}

	}
}