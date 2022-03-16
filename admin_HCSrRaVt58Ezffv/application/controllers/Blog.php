<?php


class Blog extends MY_Controller
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
		$data['tags']=$this->meta_m->meta_tags('manage-blog');
		$data['blog']=$this->blog_m->view_blog();
		$this->inner_template('pages/manage-blog',$data);
	}


	public function add()
	{

		$config=[

			'upload_path'=>'./uploads/',
			'allowed_types'=>'gif|jpg|jpeg|png',
			'encrypt_name'=>TRUE,
			'remove_spaces'=>TRUE
		];

		$this->load->library('upload',$config);
		if($this->form_validation->run('addblog') && $this->upload->do_upload('blog_img'))
		{

			$post=$this->input->post();

			$blog_img=$this->upload->data();
			$blog_img_path=$blog_img['raw_name'].$blog_img['file_ext'];
			$post['blog_img']=$blog_img_path;

			if(!empty($this->upload->do_upload('blog_author_img')))
			{
			$blog_author_img=$this->upload->data();
			$blog_author_img_path=$blog_author_img['raw_name'].$blog_author_img['file_ext'];
			$post['blog_author_img']=$blog_author_img_path;
			}

			$add_blog=$this->blog_m->add_blog($post);
			if($add_blog)
			{
			$this->session->set_flashdata('msg','Record has been added successfully !');
			return redirect('blog/manage');
			}
				
			
		}
		else
		{
			$data['upload_error']=$this->upload->display_errors();
		}
		
			$data['tags']=$this->meta_m->meta_tags('add-blog');
			$this->inner_template('pages/add-blog',$data);
	}

	public function edit($edit_id)
	{
		$data['tags']=$this->meta_m->meta_tags('edit-blog');
		$data['edit_blog']=$this->blog_m->edit_blog($edit_id);
		$this->inner_template('pages/edit-blog',$data);
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

	   if($this->form_validation->run('editblog'))
	   {

	   	  if($_FILES['blog_img']['name']!='')
	   	  {

	   	  	if($this->upload->do_upload('blog_img'))
	   	  	{
				$blog_img=$this->upload->data();
				$blog_img_path=$blog_img['raw_name'].$blog_img['file_ext'];
				unlink('./uploads/'.$post['blog_img_hidden'].'');
				$post['blog_img']=$blog_img_path;
				$upload_status=1;
	   	  	}
	   	  	else
	   	  	{
	   	  		$data['upload_error']=$this->upload->display_errors();
				$data['tags']=$this->meta_m->meta_tags('edit-blog');
				$data['edit_blog']=$this->blog_m->edit_blog($update_id);
				$this->inner_template('pages/edit-blog',$data);
				$upload_status=0;

	   	  	}
	   	  }
	   	  else
	   	  {
	   	  	$post['blog_img']=$this->input->post('blog_img_hidden');
	   	  	$upload_status=1;
	   	  }


	   	   if($_FILES['blog_author_img']['name']!='')
	   	  {

	   	  	if($this->upload->do_upload('blog_author_img'))
	   	  	{
				$blog_author_img=$this->upload->data();
				$blog_author_img_path=$blog_author_img['raw_name'].$blog_author_img['file_ext'];
				unlink('./uploads/'.$post['blog_author_img_hidden'].'');
				$post['blog_author_img']=$blog_author_img_path;
				$upload_status=1;
	   	  	}
	   	  	else
	   	  	{
	   	  		$data['upload_error']=$this->upload->display_errors();
				$data['tags']=$this->meta_m->meta_tags('edit-blog');
				$data['edit_blog']=$this->blog_m->edit_blog($update_id);
				$this->inner_template('pages/edit-blog',$data);
				$upload_status=0;

	   	  	}
	   	  }
	   	  else
	   	  {
	   	  	$post['blog_author_img']=$this->input->post('blog_author_img_hidden');
	   	  	$upload_status=1;
	   	  }



			if($upload_status)
			{
			$update_blog=$this->blog_m->update_blog($post,$update_id);
			if($update_blog)
			{
				$this->session->set_flashdata('msg','Record has been updated successfully !');
				return redirect('blog/manage');
			}
			}

	   	 

	   }
	   else
	   {
	   	  $this->edit($update_id);
	   }





	}
		   


	public function delete($del_id)
	{
		$select_blog=$this->blog_m->select_blog($del_id);
		
		/*unlink image starts*/
		unlink('./uploads/'.$select_blog->blog_img.'');
		unlink('./uploads/'.$select_blog->blog_author_img.'');
		/*unlink image ends*/
		$del_blog=$this->blog_m->del_blog($del_id);
		if($del_blog)
		{
			$this->session->set_flashdata('msg','Record has been deleted successfully !');
			return redirect('blog/manage');
		}
	}



}
