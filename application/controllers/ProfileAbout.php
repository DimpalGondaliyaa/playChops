<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileAbout extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata('email')){
			header('Location:user_login');
		}
		$this->load->model('ProfileDashboard_model');
		$postRow=$this->ProfileDashboard_model->getPostData();

		$this->load->model('getUserDetais_model');
		$userData=$this->getUserDetais_model->getUserDetails();


		$this->load->model("profile_about_model");
		$pro_data = $this->profile_about_model->fetch_pro_data();
		$headerData = array(
			"pageTitle" => "Profile ProfileAbout",
			"stylesheet" => array("ProfileAbout.css","profileDashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("ProfileAbout.js","RegisterNext.js")
		);
		$viewData = array(
			"viewName" => "ProfileAbout",
            "viewData" => array('pro_data'=>$pro_data,"postRow"=>$postRow,"userData"=>$userData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	
}
?>