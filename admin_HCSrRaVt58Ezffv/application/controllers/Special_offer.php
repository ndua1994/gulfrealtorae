<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Special_offer extends MY_Controller
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
		$data['tags']=$this->meta_m->meta_tags('manage-special-offer');
		$data['special_offer']=$this->special_offer_m->view_special_offer();
		$this->inner_template('pages/manage-special-offer',$data);
	}



	public function add()
	{
		$config=[

			'upload_path'=>'./uploads/',
			'remove_spaces'=>TRUE,
			'encrypt_name'=>TRUE,
			'allowed_types'=>'jpg|jpeg|png|gif'
		];
		$this->load->library('upload',$config);
		

		if($this->form_validation->run('addspecialoffer') && $this->upload->do_upload('offer_img'))
		{
			$post=$this->input->post();

			$offer_img=$this->upload->data();
			$offer_img_path=$offer_img['raw_name'].$offer_img['file_ext'];
			$post['offer_img']=$offer_img_path;

			if(!empty($this->upload->do_upload('offer_img')))
			{
			$offer_img=$this->upload->data();
			$offer_img_path=$offer_img['raw_name'].$offer_img['file_ext'];
			$post['offer_img']=$offer_img_path;
			}

			$add_special_offer=$this->special_offer_m->add_special_offer($post);
			if($add_special_offer)
			{
			$this->session->set_flashdata('msg','Record has been added successfully !');
			return redirect('special-offer/manage');
			}
				

		}
		else
		{
			$data['upload_error']=$this->upload->display_errors();
		}

		$data['tags']=$this->meta_m->meta_tags('add-special-offer');
		$this->inner_template('pages/add-special-offer',$data);

	}

	public function edit($edit_id)
	{
		$data['tags']=$this->meta_m->meta_tags('edit-special-offer');
		$data['edit_special_offer']=$this->special_offer_m->edit_special_offer($edit_id);
		$this->inner_template('pages/edit-special-offer',$data);
	}

	public function update($update_id)
	{
		$config=[

			'upload_path'=>'./uploads/',
			'allowed_types'=>'gif|jpg|jpeg|png',
			'encrypt_name'=>TRUE,
			'remove_spaces'=>TRUE
		];

		$this->load->library('upload',$config);
		$post=$this->input->post();

	   if($this->form_validation->run('editspecialoffer'))
	   {

	   	  if($_FILES['offer_img']['name']!='')
	   	  {

	   	  	if($this->upload->do_upload('offer_img'))
	   	  	{
				$offer_img=$this->upload->data();
				$offer_img_path=$offer_img['raw_name'].$offer_img['file_ext'];
				unlink('./uploads/'.$post['special_offer_img_hidden'].'');
				$post['offer_img']=$offer_img_path;
				$upload_status=1;
	   	  	}
	   	  	else
	   	  	{
	   	  		$data['upload_error']=$this->upload->display_errors();
				$data['tags']=$this->meta_m->meta_tags('edit-special-offer');
				$data['edit_special_offer']=$this->special_offer_m->edit_special_offer($update_id);
				$this->inner_template('pages/edit-special-offer',$data);
				$upload_status=0;

	   	  	}
	   	  }
	   	  else
	   	  {

	   	  	$post['offer_img']=$this->input->post('special_offer_img_hidden');
	   	  	$upload_status=1;
	   	  }


	   	}



			if($upload_status)
			{
			$update_blog=$this->special_offer_m->update_special_offer($post,$update_id);
			if($update_blog)
			{
				$this->session->set_flashdata('msg','Record has been updated successfully !');
				return redirect('special-offer/manage');
			}
			}

	   }



		public function delete($del_id)
	{
		$select_special_offer=$this->special_offer_m->select_special_offer($del_id);
		
		/*unlink image starts*/
		unlink('./uploads/'.$select_special_offer->offer_img.'');
		/*unlink image ends*/
		$del_blog=$this->special_offer_m->del_special_offer($del_id);
		if($del_blog)
		{
			$this->session->set_flashdata('msg','Record has been deleted successfully !');
			return redirect('special-offer/manage');
		}
	}



	}
