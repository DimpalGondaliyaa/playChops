<?php /**
* 
*/
class RegisterNextModel extends CI_Model
{
	public function insertNextdata($data)
	{
		$email = $this->session->userdata('email');
		$this->db->where("email",$email);
		$this->db->update("user_ragister",$data);
	}
} ?>