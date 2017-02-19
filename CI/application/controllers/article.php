<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller
{
	public function index()
	{
		$this->load->library('pagination');
		$perpage=3;
		$config['base_url'] = site_url('article/index');
		$config['total_rows'] = $this->db->count_all_results('article');//统计总行数
		$config['per_page'] = $perpage;//设置每页显示多少个
		$config['first_link'] = '首页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['last_link'] = '最后一页';
		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		/*p($data);
		die;*/
		$offset=$this->uri->segment(3);
		$this->db->limit($perpage,$offset);
		$this->load->model('article_model');
		$data['article']=$this->article_model->article_cate();
		/*p($data);
		die;*/
		$this->load->view('check_article',$data);
	}
	public function send_article()
	{
		$this->load->model('cate');
		$data['cate'] = $this->cate->check();
		/*p($data);
		die;*/
		$this->load->helper('form');
		$this->load->view('article',$data);
	}
	public function send()
	{
		//文件上传
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['file_name'] = time() . mt_rand(1000,9999);

		$this->load->library('upload',$config);
		$this->upload->do_upload('thumb');
		$wrong=$this->upload->display_errors();
		if($wrong)
		{
			error($wrong);
		}
		$message=$this->upload->data();
		//p($message);
		//缩略图
		$config1['source_image'] = $message['full_path'];
		$config1['create_thumb'] = FALSE;
		$config1['maintain_ratio'] = TRUE;
		$config1['width'] = 200;
		$config1['height'] = 200;
		$this->load->library('image_lib',$config1);
		$flag1=$this->image_lib->resize();
		if(!$flag1)
		{
			error("缩略失败");
		}
		/*var_dump($flag1);
		die;*/
		$this->load->library('form_validation');
		$flag = $this->form_validation->run('article');
		if($flag)
		{
			$this->load->model('article_model','am');
			$data = array
			(
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'cid' => $this->input->post('cid'),
				'thumb' => $message['file_name'],
				'info' => $this->input->post('info'),
				'content' => $this->input->post('content'),
				'time' =>time(),
				'username' =>$this->session->userdata('username')
			);
			$this->am->add($data);
			success("article/index","发表成功");
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('article');
		}
	}
	public function u_send()
	{
		//文件上传
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['file_name'] = time() . mt_rand(1000,9999);

		$this->load->library('upload',$config);
		$this->upload->do_upload('thumb');
		$wrong=$this->upload->display_errors();
		if($wrong)
		{
			error($wrong);
		}
		$message=$this->upload->data();
		//p($message);
		//缩略图
		$config1['source_image'] = $message['full_path'];
		$config1['create_thumb'] = FALSE;
		$config1['maintain_ratio'] = TRUE;
		$config1['width'] = 200;
		$config1['height'] = 200;
		$this->load->library('image_lib',$config1);
		$flag1=$this->image_lib->resize();
		if(!$flag1)
		{
			error("缩略失败");
		}
		/*var_dump($flag1);
		die;*/
		$this->load->library('form_validation');
		$flag = $this->form_validation->run('article');
		if($flag)
		{
			$this->load->model('article_model','am');
			$data = array
			(
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'cid' => $this->input->post('cid'),
				'thumb' => $message['file_name'],
				'info' => $this->input->post('info'),
				'content' => $this->input->post('content'),
				'time' =>time(),
				'username' =>$this->session->userdata('username')
			);
			$this->am->add($data);
			success("home/u_look","发表成功");
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('user_send_art');
		}
	}
	public function article_content()
	{
		$aid=$this->uri->segment(3);
		/*p($url);
		die;*/
		$this->load->model('article_model','am');
		$data['article']=$this->am->check_art_content($aid);
		/*p($data);
		die;*/
		$this->load->view('article_content',$data);
	}
	public function del()
	{
		$aid=$this->uri->segment(3);
		$this->load->model('article_model','am');
		$this->am->del($aid);
		success('article/index','以删除违规文章');
	}
	public function change()
	{
		$aid=$this->uri->segment(3);
		$this->load->model('article_model','am');
		$this->am->change($aid);
		success('article/index','该文章已成热门文章');
	}
}