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

		/*$cmt=$this->ProfileDashboard_model->getComments();*/
		
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

            "viewData" => array('postRow'=>$postRow,'userData'=>$userData,'pro_data'=>$pro_data,/*'comment'=>$cmt*/),
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

		/*$time=date('h:i '); */
		
		/*$timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
		echo gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I")));*/

		/*$date = new DateTime("@$ts"); 
		var_dump($date->format('Y-m-d H:i:s e'));

		$time=date("g:i a", time());*/
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
		$data  = array('email' => $_POST['email'] ,
		'comment'=>$_POST['comment'],
		'post_id' =>$_POST['post_id'] );
		$this->ProfileDashboard_model->addcommentpost($data);
	}

}
?>