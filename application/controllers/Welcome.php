<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Newspaper');
		$all_post['posts'] = $this->Newspaper->get_all_post();
		$this->load->view('welcome_message',$all_post);
	}
	public function view_post($slug,$id)
	{
		$this->load->model('Newspaper');
		$posts['article'] = $this->Newspaper->show_post($slug,$id);
		$this->load->view('single',$posts);
	}
}
