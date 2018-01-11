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

		$this->load->model("buddyListt");
		$rowData = $this->buddyListt->fetchbuddylist();

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

            "viewData" => array('postRow'=>$postRow,'userData'=>$userData,'pro_data'=>$pro_data,'rowData'=>$rowData),
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

		$config["upload_path"]='html/images/post_images';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$postid."_postImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('post_attachment');
	}

	public function commentpost()

	{
		$this->load->model("ProfileDashboard_model");
		$data  = array(
		'comment'=>$_POST['comment'],
		'post_id' =>$_POST['post_id']);
		$this->ProfileDashboard_model->addcommentpost($data);
	}
	public function ratingpost()
	{
		$this->load->model("ProfileDashboard_model");
		$data  = array(
		'rate'=>$_POST['rate'],
	

		 );
		$this->ProfileDashboard_model->addratingpost($data);
	}
	public function adddashcomment()
	{
		$this->load->model("ProfileDashboard_model");
		$id = $_POST['post_Id'];
		$data = array('comment' => $_POST['comment'] ,'post_Id'=> $_POST['post_Id'] );
		$this->ProfileDashboard_model->adddascomm($data);
	}
	public function getcomm($id)
	{
		$this->load->model("ProfileDashboard_model");
		$data =$this->ProfileDashboard_model->getcomm($id);
		$this->load->view("add_comment",$data);
	}

}
?>