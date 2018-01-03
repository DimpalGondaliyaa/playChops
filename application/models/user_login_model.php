<?php /**
* 
*/
class user_login_model extends CI_Model
{
	public function logindata($data)
	{
		$email = $data['email'];
		$pass = $data['password'];
		$sql = $this->db->query("select * from user_ragister where email='$email' and password='$pass'");
		if($sql->num_rows()==1)
		{
			$sql= array('status' => "ok",
			'message' => "login ok" );
			$this->session->set_userdata('email',$email);
		}
		else
		{
			$sql= array('status' => "no",
			'message' => "login fail"  );
		}
		return $sql;
	}	
} 
?>