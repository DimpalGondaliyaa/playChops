<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileDashboard extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata('email')){
			header('Location:user_login');
		}
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
            "viewData" => array('pro_data'=>$pro_data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function postStatus(){
		$this->load->model('ProfileDashboard_model');
		$data = $_POST['data'];
		$ress = $this->ProfileDashboard_model->postStatus($data);
		echo json_encode($ress);
	}
}
?>