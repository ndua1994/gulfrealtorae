<?php

defined('BASEPATH')or exit('No direct script access allowed');


class Login extends MY_Controller
{
	public function index()
	{
		if(!empty($this->session->userdata('logged_in')))
		{
			return redirect('login/dashboard');

		}
		$data['tags']=$this->meta_m->meta_tags('login');
		$this->login_template('login/login',$data);
	}


	public function login_validate()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$login_check=$this->login_m->login_check($email,$password);

		if($login_check)
		{

			if($login_check->is_active==2)
			{
				$resp=array('status'=>'acc_suspended','message'=>'Account Suspended');
			}
			else
			{
				$userlogin=array(

				'login_id'=>$login_check->login_id,
				'login_username'=>$login_check->first_name.' '.$login_check->last_name,
				'login_type_id'=>$login_check->login_type_id,
				'login_email'=>$login_check->email,
				'login_type'=>$login_check->login_type,
				'logged_in'=>TRUE

			);

			$this->session->set_userdata($userlogin);
			$resp=array('status'=>'success','redirect_url'=>''.base_url('login/dashboard').'');
			}
			
			
			
		}
		else
		{
			$resp=array('status'=>'failure','message'=>'Invalid Login Credentials');
		}

		echo json_encode($resp);

	}


	public function dashboard()
	{
		if(empty($this->session->userdata('logged_in')))
		{
			return redirect('login');
		}

		$data['tags']=$this->meta_m->meta_tags('dashboard');
		$this->inner_template('pages/dashboard',$data);
	}
}