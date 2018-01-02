<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_register extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "user_register",
			"stylesheet" => array("user_register.css")
		);
		$footerData = array(
			"jsFiles" => array("user_register.js")
		);
		$viewData = array(
			"viewName" => "user_register",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function user_reg_data()
	{
		$this->load->model("user_register_model");
		$data = array(
			'fname' => $_POST['fname'],
			'lname' => $_POST['lname'],
			'email' => $_POST['email'],
			'fname' => $_POST['fname'],
			'fname' => $_POST['fname'], );
		$this->user_register_model->user_reg_data();

	}
}
