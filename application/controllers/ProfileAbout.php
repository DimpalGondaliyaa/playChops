<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileAbout extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Profile ProfileAbout",
			"stylesheet" => array("ProfileAbout.css")
		);
		$footerData = array(
			"jsFiles" => array("ProfileAbout.js")
		);
		$viewData = array(
			"viewName" => "ProfileAbout",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
?>