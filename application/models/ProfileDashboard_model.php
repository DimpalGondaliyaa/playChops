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
			$date=gmdate("F j, Y");
			$time= date("h:i:a");
				$row=$this->db->query("SELECT * FROM buddyposts WHERE email='".$email."' AND postDate ='".$date."' 
					 ORDER BY post_Id DESC");




				$row=$row->result_array();



				/*foreach ($row as $key => $coments) {
					$row[$key]["coment"] = $this->getComments($coments["post_Id"]);
		 		}*/
				return $row;
		}

		/*public function getComments($id){
			$query = $this->db->query("Select * from commenttbl where post_id='$id' GROUP BY id DESC LIMIT 2");
			$profileRow = $query->result_array();
		
			return $profileRow;
		}*/


		public function addpostimg($data,$id)
		{
			/*$email=$this->session->userdata('email');*/
			$this->db->where("post_Id",$id);
			$this->db->update("buddyposts",$data);
		}
		public function addcommentpost($data)
		{
			/*$post_id=$data['post_id'];
			$comment = $data['comment'];*/
			/*$this->db->where('post_id','2');*/
			$this->db->insert("commenttbl",$data);
		}
		public function addratingpost($data)
		{
			$this->db->insert("userliks",$data);
		}

		
		/*public function gettwocomment($id)
		{
			$commData = $this->db->query("select * from  commenttbl where post_id='$id' ");
			$ress = $commData->result_array();
			var_dump($ress);
			return $ress;
		}*/
	}
?>