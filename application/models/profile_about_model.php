<?php /**
* 
*/
class profile_about_model extends CI_Model
{
	public function fetch_pro_data()
	{
		$email = $this->session->userdata('email');
		$sql = $this->db->query("select * from user_ragister where email='$email'");
		$ress = $sql->row_array();
		return $ress;
	}
} ?>