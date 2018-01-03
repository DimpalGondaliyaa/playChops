<?php
	/**
	* 
	*/
	class ProfileDashboard_model extends CI_Model
	{
		
		public function postStatus($data)
		{
			$this->db->insert('buddyposts',$data);
			$post=$this->db->insert_id();

			if($post>0)
			{
				$post= array('status' => "ok",
				'message' => "login ok" );
				//$this->session->set_userdata('email',$post);
				
			}
			else
			{
				$post= array('status' => "no",
				'message' => "login fail"  );
			}

			return $post;
		}
	}
?>