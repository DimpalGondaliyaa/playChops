<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileDashboard extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Profile Dashboard",
			"stylesheet" => array("profileDashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("profileDashboard.js")
		);
		$viewData = array(
			"viewName" => "profileDashboard",
            "viewData" => array(),
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