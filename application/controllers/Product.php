<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$this->load->library('session');
		$this->load->model('Inventory','',TRUE);
		$this->load->helper('form');
	}

	public function index()
	{

		
		$data['pid'] = $this->Inventory->getInfoID();
		$data['LatestInventory']=$this->Inventory->getInventory();
		$data['Report']=$this->Inventory->getCategoryReport();
		//$data['History']=$this->Inventory->getHistory();
		//$this->load->library('session');
		$this->load->view('header');
		$this->load->view('product_view', $data);
		$this->load->view('footer');
	}

	public function getInfo($id)
	{
	      $this->index($id);
    }

	function addProduct(){
		$this->load->library('form_validation');
		$data['content'] = "addProduct";
		$this->form_validation->set_rules('id', 'Product ID', 'trim|required');
		$this->form_validation->set_rules('product', 'Product Name', 'trim|required');
		$this->form_validation->set_rules('category', 'Category', 'trim|required');
		$this->form_validation->set_rules('sku', 'SKU', 'trim|required');
		$this->form_validation->set_rules('rPoint', 'Reorder Point', 'trim|required');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required');
		$this->form_validation->set_rules('lastupdated', 'Last Updated', 'trim|required');
		$this->form_validation->set_rules('purchasePrice', 'PurchasePrice_kg', 'trim|required');
		$this->form_validation->set_rules('salePrice', 'SalePrice_kg', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			//Field validation failed. User redirected to login page
			$this->session->set_flashdata('status', '<div class="alert alert-danger text-center" style="width:100%">Error! Please Enter the Correct Information!</div>');
			$data['LatestInventory']=$this->Inventory->getInfo();
			redirect(base_url());
			$this -> session -> unset_userdata('status');
		}
		else{
			if (!$this->upload->do_upload('pImg')) {

			} else {
				// If the upload is successful, retrieve the uploaded file information
				$data['id'] = $this->input->post('id');
				$data['product'] = $this->input->post('product');
				$data['category'] = $this->input->post('category');
				$data['sku'] = $this->input->post('sku');
				$data['rPoint'] = $this->input->post('rPoint');
				$data['quantity'] = $this->input->post('quantity');
				$data['lastupdated'] = $this->input->post('lastupdated');
				$data['location'] = $this->input->post('location');
				$data['purchasePrice'] = $this->input->post('purchasePrice');
				$data['salePrice'] = $this->input->post('salePrice');
			}
			$result = $this->Inventory->insertNewProduct($data);

			if ($result) {
				$this->session->set_flashdata('status', '<div class="alert_green" style="width:100%">New Report Was Successfully Added!</div>');
				$data['LatestInventory']=$this->Inventory->getInfo();
				redirect(base_url());
				$this -> session -> unset_userdata('status');
			}else{
				$this->session->set_flashdata('status', '<div class="alert" style="width:500px">Error! Please Try Again!!</div>');
				$data['LatestInventory']=$this->Inventory->getInfo();
				redirect(base_url());
				$this -> session -> unset_userdata('status');
			}
		}
	}

}
