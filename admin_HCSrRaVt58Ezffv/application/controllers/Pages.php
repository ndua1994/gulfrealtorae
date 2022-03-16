<?php


class Pages extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata('logged_in')))
		{
			return redirect('login');
		}
	}

	public function contact_us()
	{
		$data['tags']=$this->meta_m->meta_tags('contacted-us');
		$data['rec']=$this->page_m->contact_det();

		$this->inner_template('pages/contact-us',$data);
	}

	public function contact_update()
	{

		if($this->form_validation->run('updatecontct'))
		{
			$data=$this->input->post();
			$update_contctus=$this->page_m->update_contctus($data);

			if($update_contctus)
			{
				$this->session->set_flashdata('msg','Contact Details has been updated successfully !');
				return redirect('pages/contact-us');
			}

		}

		$this->contact_us();
	}


	public function about_us()
	{
		$data['tags']=$this->meta_m->meta_tags('page-about-us');
		$data['rec']=$this->page_m->about_det();
		$this->inner_template('pages/about-us',$data);
	}

	public function about_update()
	{
		$config=[
				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpg|jpeg|gif|png',
				'encrypt_name'=>TRUE,
				'remove_spaces'=>TRUE
			];
		$this->load->library('upload',$config);
         $post=$this->input->post();    
         if($this->form_validation->run('updateabout'))
         {

         	

            if(!empty($_FILES['abt_img']['name']))
            {     	
				if($this->upload->do_upload('abt_img'))
				{
					$abt_img=$this->upload->data();
					$abt_img_path=$abt_img['raw_name'].$abt_img['file_ext'];
					unlink('./uploads/'.$post['abt_img_hidden']);
					$post['abt_img']=$abt_img_path;
					$upload_status=1;

				}
				else
				{
					$data['upload_error']=$this->upload->display_errors();
					$data['tags']=$this->meta_m->meta_tags('about-us');
					$data['rec']=$this->page_m->about_det();
					$this->inner_template('pages/about-us',$data);
					$upload_status=0;
				}

            }
            else
            {
            	$post['abt_img']=$this->input->post('abt_img_hidden');
            	$upload_status=1;
            }



         	
         	if($upload_status)
         	{
         		$update_aboutus=$this->page_m->update_aboutus($post);
         		if($update_aboutus)
         		{
					$this->session->set_flashdata('msg','Record has been updated successfully !');
					return redirect('pages/about-us');
         		}
         		
         	}

         }
         else
         {
         	$this->about_us();
         }

       

	}

	public function header_section()
	{
		$data['tags']=$this->meta_m->meta_tags('header-section');
		$data['rec']=$this->page_m->header_details();
		$this->inner_template('pages/header-section',$data);
	}

	public function header_update()
	{
		$config=[

			'upload_path'=>'./uploads/',
			'allowed_types'=>'jpg|jpeg|gif|png',
			'encrypt_name'=>TRUE,
			'remove_spaces'=>TRUE
		];

		$this->load->library('upload',$config);
		$post=$this->input->post();
		

			if(!empty($_FILES['logo_img']['name']))
			{

				if($this->upload->do_upload('logo_img'))
				{
					$logo_img=$this->upload->data();
					$logo_img_path=$logo_img['raw_name'].$logo_img['file_ext'];
					unlink('./uploads/'.$post['logo_img_hidden']);
					$post['logo_img']=$logo_img_path;
					$upload_status=1;
				}
				else
				{
					$data['upload_error']=$this->upload->display_errors();
					$data['tags']=$this->meta_m->meta_tags('header-section');
					$data['rec']=$this->page_m->header_details();
					$this->inner_template('pages/about-us',$data);
					$upload_status=0;
				}
			}
			else
			{

				$post['logo_img']=$this->input->post('logo_img_hidden');
				$upload_status=1;
			}

			if($upload_status)
         	{

         		$update_headersection=$this->page_m->update_headersection($post);
         		if($update_headersection)
         		{
					$this->session->set_flashdata('msg','Record has been updated successfully !');
					return redirect('pages/header-section');
         		}
         		
         	}
	


	}

	public function footer_section()
	{
		$data['tags']=$this->meta_m->meta_tags('footer-section');
		$data['footer_details']=$this->page_m->footer_details();
		$this->inner_template('pages/footer-section',$data);
	}

	public function footer_update()
	{
		$config=[
			'upload_path'=>'./uploads/',
			'remove_spaces'=>TRUE,
			'encrypt_name'=>TRUE,
			'allowed_types'=>'jpg|jpeg|png|gif'
		];	
      $this->load->library('upload',$config);
		$post=$this->input->post();	

		if(!empty($_FILES['footer_logo_img']['name']))
		{
			if($this->upload->do_upload('footer_logo_img'))
				{
					$footer_logo_img=$this->upload->data();
					$footer_logo_img_path=$footer_logo_img['raw_name'].$footer_logo_img['file_ext'];
					unlink('./uploads/'.$post['footer_logo_img_hidden']);
					$post['footer_logo_img']=$footer_logo_img_path;
					$upload_status=1;
				}
				else
				{
					$data['upload_error']=$this->upload->display_errors();
					$data['tags']=$this->meta_m->meta_tags('footer-section');
					$data['footer_details']=$this->page_m->header_details();
					$this->inner_template('pages/footer-section',$data);
					$upload_status=0;
				}

		}
		else
		{
			$post['footer_logo_img']=$this->input->post('footer_logo_img_hidden');
			$upload_status=1;
		}

		if($upload_status)
		{

			$update_footersection=$this->page_m->update_footersection($post);
			if($update_footersection)
			{
			$this->session->set_flashdata('msg','Record has been updated successfully !');
			return redirect('pages/footer-section');
			}

		}
	
	}





}