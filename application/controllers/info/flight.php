<?php
/*This is a controller that responds a list of plans as json notation
this is a defualt method when this controller is get called */
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$record = $this->flights->all();
		header("Content-type: application/json");
		echo json_encode($record);
}
	
}