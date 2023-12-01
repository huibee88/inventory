<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('Inventory','',TRUE);
	}

	public function index()
	{
		// $data['latestInfo']=$this->Inventory->getLatestInfo();
		// $data['countKKF']=$this->Inventory->checkCountKKF();
		// $data['countPTT']=$this->Inventory->checkCountPTT();
		// $data['countTR']=$this->Inventory->checkCountTR();
		// $data['countPP']=$this->Inventory->checkCountPP();
		// $data['countTPR']=$this->Inventory->checkCountTPR();
		// $data['countRN']=$this->Inventory->checkCountRN();
		$this->load->view('header');
		$this->load->view('content-main');
		$this->load->view('footer');
	}
}
