<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileDashboard extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata('email')){
			header('Location:user_login');
		}

		$this->load->model('ProfileDashboard_model');
		$postRow=$this->ProfileDashboard_model->getPostData();

		
	/*	$comments = $this->ProfileDashboard_model->gettwocomment($postid);*/


		/*get User Deatails by Email*/
		$this->load->model('getUserDetais_model');
		$userData=$this->getUserDetais_model->getUserDetails();

		$this->load->model("profile_about_model");
		$pro_data = $this->profile_about_model->fetch_pro_data();

		$headerData = array(
			"pageTitle" => "Profile Dashboard",
			"stylesheet" => array("profileDashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("profileDashboard.js")
		);
		$viewData = array(
			"viewName" => "profileDashboard",

            "viewData" => array('postRow'=>$postRow,'userData'=>$userData,'pro_data'=>$pro_data,/*"comments"=>$comments*/),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function postStatus(){
		$this->load->model('ProfileDashboard_model');
		$this->load->helper('date');
		
		//$dt = new DateTime();
		date_default_timezone_set("UTC");
    	$date=gmdate("F j, Y");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$time= date("h:i:a");
		$data = array(
					'postData' =>$_POST['postStory'],
					'email'=>$_POST['email'],
					'postType'=>$_POST['postType'],
					'post_status'=>$_POST['postStatus'],
					'postTime'=>$time,
					'postDate'=>$date
				   );
		 $postid = $this->ProfileDashboard_model->postStatus($data);
	
	}

	public function postMedia()
	{
		$this->load->model('ProfileDashboard_model');
		$this->load->helper('date');
		
		//$dt = new DateTime();
		date_default_timezone_set("UTC");
    	$date=gmdate("F j, Y");

		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$time= date("h:i:a");
		$data = array(
					'postData' =>$_POST['postStory'],
					'email'=>$_POST['email'],
					'postType'=>$_POST['postType'],
					'post_status'=>$_POST['postStatus'],
					'postTime'=>$time,
					'postDate'=>$date
				   );
		 $postid = $this->ProfileDashboard_model->postStatus($data);
		 $userImage=$postid."_postImage.".pathinfo($_FILES['post_attachment']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('post_attachment'=>$userImage);
		$this->ProfileDashboard_model->addpostimg($adduserimgg,$postid);


		$dir = "<?php echo base_url(); ?>html/images/post_images";   //your folder location

			foreach (glob($dir."*.jpg") as $file) { 
			    if (filectime($file) < time() - 5) { 
			        unlink($file);
			    }
			}
		/*$imagePattern = "/\.(jpg|jpeg|png|gif|bmp|tiff)$/";
			$directory = ".";

			if (($handle = opendir($directory)) != false) {
			    while (($file = readdir($handle)) != false) {
			        $filename = "html/images/post_images/$file";
			        if (strtotime("-24 hours") <= filemtime($filename) && preg_match($imagePattern, $filename)) {
			            unlink($filename);
			        }
			    }

			    closedir($handle);
			}
*/


		$config["upload_path"]='html/images/post_images';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$postid."_postImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('post_attachment');
	}

	public function commentpost($id)

	{
		$this->load->model("ProfileDashboard_model");
		$data  = array(
		'comment'=>$_POST['comment'],
		'post_id' =>$id);
		$this->ProfileDashboard_model->addcommentpost($data);
	}
	public function ratingpost($id)
	{
		$this->load->model("ProfileDashboard_model");
		$data  = array(
		'rate'=>$_POST['rate'],
		'post_id'=>$id,
		 );
		$this->ProfileDashboard_model->addratingpost($data);
	}

	/*public function postLike(){
		$this->load->model('postLike_model');*/
		/*$data=$_POST['data'];*/
		/*$data=array(
			'post_id'=>$_POST['id'],
			'email'=>$_POST['email'],
			'likes'=>$_POST['likes'],
			'status'=>$_POST['status']
		);
		$this->postLike_model->postLikeData($data);*/
		/*echo json_encode($likes);*/
	/*}*/

}
?>