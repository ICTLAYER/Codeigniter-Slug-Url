<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newspaper extends CI_Model {

	
	public function get_all_post()
	{
		$this->db->select('*');
		$this->db->from('post');
		$query = $this->db->get();
		$posts = $query->result();
		return $posts;
	}
	public function show_post($slug,$id)
	{
		
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$post = $query->row();
		return $post;
	}
}
