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
	public function updateNextdata($data)
	{
		$email = $this->session->userdata('email');
		$about_me=$data['about_me'];
		$Birthday=$data['Birthday'];
		$Birthplace=$data['Birthplace'];
		$Lives_In=$data['Lives_In'];
		$Occupation=$data['Occupation'];
		$Joined=$data['Joined'];
		$Status=$data['Status'];
		$Website=$data['Website'];
		$mobile=$data['mobile'];
		$this->db->query("UPDATE user_ragister SET Birthday='".$Birthday."',about_me='".$about_me."',email='".$email."',
		Birthplace='".$Birthplace."', Lives_In='".$Lives_In."', Occupation='".$Occupation."', Joined='".$Joined."' ,Status='".$Status."',Website='".$Website."' ,mobile='".$mobile."' WHERE email='".$email."' ");
	/*	$this->db->update("user_ragister",$data);*/
	}
	public function updathobbiydata($data)
	{
		$email = $this->session->userdata('email');
		$hobby=$data['hobby'];
		$Favourite_Music_Bands_Artists=$data['Favourite_Music_Bands_Artists'];
		$Favourite_TV_Shows=$data['Favourite_TV_Shows'];
		$FavouriteBooks=$data['FavouriteBooks'];
		$FavouriteWriters=$data['FavouriteWriters'];
		$FavouriteGames=$data['FavouriteGames'];
		$FavouriteMovies=$data['FavouriteMovies'];
		$OtherInterests=$data['OtherInterests'];
		$mobile=$data['mobile'];
		$Website=$data['Website'];
		$this->db->query("UPDATE user_ragister SET email='".$email."',hobby='".$hobby."',Favourite_Music_Bands_Artists='".$Favourite_Music_Bands_Artists."',
		Favourite_TV_Shows='".$Favourite_TV_Shows."', FavouriteBooks='".$FavouriteBooks."', FavouriteWriters='".$FavouriteWriters."', FavouriteGames='".$FavouriteGames."' ,FavouriteMovies='".$FavouriteMovies."',OtherInterests='".$OtherInterests."' ,mobile='".$mobile."',Website='".$Website."' WHERE email='".$email."' ");
	
	}
	public function updatEducationdata($data)
	{
		$email = $this->session->userdata('email');
		$college=$data['college'];
		$college_start_year=$data['college_start_year'];
		$college_end_year=$data['college_end_year'];
		$primaryschool=$data['primaryschool'];
		$start_primary_year=$data['start_primary_year'];
		$end_primary_year=$data['end_primary_year'];
		$highersecondary=$data['highersecondary'];
		$start_higher_year=$data['start_higher_year'];
		$end_higher_year=$data['end_higher_year'];

		$this->db->query("UPDATE user_ragister SET college='".$college."',college_start_year='".$college_start_year."',college_end_year='".$college_end_year."',
		primaryschool='".$primaryschool."', start_primary_year='".$start_primary_year."', end_primary_year='".$end_primary_year."', highersecondary='".$highersecondary."' ,start_higher_year='".$start_higher_year."',end_higher_year='".$end_higher_year."'  ");
	}

	
} ?>