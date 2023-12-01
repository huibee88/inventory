<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller{


	public function index(){

		$this->load->view('header');
		$this->load->view('salesreport_view');
		$this->load->view('footer');
	}

}//end of class