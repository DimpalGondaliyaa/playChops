<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilePhoto extends CI_Controller {

	
	public function index()
	{		
		$this->load->model("profile_about_model");
		$pro_data = $this->profile_about_model->fetch_pro_data();
		$headerData = array(
			"pageTitle" => "ProfilePhoto",
			"stylesheet" => array("ProfilePhoto.css")
		);
		$footerData = array(
			"jsFiles" => array("ProfilePhoto.js")
		);
		$viewData = array(
			"viewName" => "ProfilePhoto",
            "viewData" => array('pro_data'=>$pro_data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
?>
