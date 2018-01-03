<?php /**
* 
*/
class Hobbie_model extends CI_Model
{
	public function addhobbies($data)
	{
		$email = $this->session->userdata("email");
		$this->db->where("email",$email);
		$this->db->update("user_ragister",$data);
	}
} ?>