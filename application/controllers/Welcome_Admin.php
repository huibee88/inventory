<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('Nadim','',TRUE);
	}

	public function index()
	{
		$data['latestInfo']=$this->Nadim->getLatestInfo();
		$data['countKKF']=$this->Nadim->checkCountKKF();
		$data['countPTT']=$this->Nadim->checkCountPTT();
		$data['countTR']=$this->Nadim->checkCountTR();
		$data['countPP']=$this->Nadim->checkCountPP();
		$data['countTPR']=$this->Nadim->checkCountTPR();
		$data['countRN']=$this->Nadim->checkCountRN();
		$this->load->view('header_logged_staff');
		$this->load->view('content-main', $data);
		$this->load->view('footer');
	}
}
