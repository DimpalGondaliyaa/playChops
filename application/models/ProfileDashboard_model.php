<?php
	/**
	* 
	*/
	class ProfileDashboard_model extends CI_Model
	{
		
		public function postStatus($data)
		{
			$post=$this->db->insert('buddyposts',$data);
			$post=$this->db->insert_id();
			return $post;
		}

		/*get Post Data*/
		public function getPostData(){
			$email=$this->session->userdata('email');
				$row=$this->db->query("SELECT * FROM buddyposts WHERE email='".$email."' ORDER BY post_Id DESC");
				$row=$row->result_array();
				return $row;
		}
		public function addpostimg($data,$id)
		{
			/*$email=$this->session->userdata('email');*/
			$this->db->where("post_Id",$id);
			$this->db->update("buddyposts",$data);
		}
		public function addcommentpost($data)
		{
			$post=$this->db->insert('commenttbl',$data);
		}
	}
?>