<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuddyList extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata('email')){
			header('Location:user_login');
		}
		$this->load->model("buddyListt");
		$rowData = $this->buddyListt->fetchbuddylist();

		$headerData = array(
			"pageTitle" => "BuddyList",
			"stylesheet" => array("buddyList.css")
		);
		$footerData = array(
			"jsFiles" => array("buddyList.js")
		);
		$viewData = array(
			"viewName" => "buddyList",
            "viewData" => array("rowData"=>$rowData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
?>
