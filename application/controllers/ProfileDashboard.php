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


		/*get User Deatails by Email*/
		$this->load->model('getUserDetais_model');
		$userData=$this->getUserDetais_model->getUserDetails();

		$headerData = array(
			"pageTitle" => "Profile Dashboard",
			"stylesheet" => array("profileDashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("profileDashboard.js")
		);
		$viewData = array(
			"viewName" => "profileDashboard",
            "viewData" => array('postRow'=>$postRow,'userData'=>$userData),
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
		 $this->ProfileDashboard_model->postStatus($data);
		/*echo json_encode($ress);*/
	}
}
?>