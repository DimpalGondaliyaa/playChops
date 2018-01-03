<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hobbie extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Hobbie",
			"stylesheet" => array("Hobbie.css")
		);
		$footerData = array(
			"jsFiles" => array("Hobbie.js")
		);
		$viewData = array(
			"viewName" => "Hobbie",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function addHobbie()
	{
		$this->load->model("Hobbie_model");
		$data =  array('Favourite_TV_Shows' => $_POST['Favourite_TV_Shows'] ,
		'Favourite_Music_Bands_Artists' => $_POST['Favourite_Music_Bands_Artists'] ,
		'FavouriteBooks' => $_POST['FavouriteBooks'] ,
		'FavouriteWriters' => $_POST['FavouriteWriters'] ,
		'FavouriteMovies' => $_POST['FavouriteMovies'] ,
		'FavouriteGames' => $_POST['FavouriteGames'] ,
		'OtherInterests' => $_POST['OtherInterests']  );

		$this->Hobbie_model->addhobbies($data);
	}
}
