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


			/*if($post)
			{
				$post= array('status' => "ok",
				'message' => "login ok" );
				$email=$this->session->userdata('email');
				$this->db->where('email',$email);
				$this->db->update('buddyposts');
				//$this->session->set_userdata('email',$post);
				
			}
			else
			{
				$post= array('status' => "no",
				'message' => "login fail"  );
			}

			return $post;*/
		}

		/*get Post Data*/
		public function getPostData(){
			$email=$this->session->userdata('email');
				$row=$this->db->query("SELECT * FROM buddyposts WHERE email='".$email."' ORDER BY post_Id DESC");
				$row=$row->result_array();
				return $row;
		}
	}
?>