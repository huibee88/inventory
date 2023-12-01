<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('Inventory','',TRUE);
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index(){

		$data['Order'] = $this->Inventory->getOrder();

		$this->load->view('header');
		$this->load->view('order_view', $data);
		$this->load->view('footer');
	}

	function addOrder(){
		$this->load->library('form_validation');
		$data['content'] = "get";

		$this->form_validation->set_rules('odate', 'Order Date', 'trim|required');
		$this->form_validation->set_rules('cname', 'Customer Name', 'trim|required');
		$this->form_validation->set_rules('product', 'Product', 'trim|required');
		$this->form_validation->set_rules('oquantity', 'Order Quantity', 'trim|required');
		$this->form_validation->set_rules('invoiceno', 'Invoice Number', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			//Field validation failed. User redirected to login page
			$this->session->set_flashdata('status', '<div class="alert alert-danger text-center" style="width:100%">Error! Please Enter the Correct Information!</div>');
			$this->load->view('header');
			$this->load->view('order_view', $data);
			$this->load->view('footer');
			$this -> session -> unset_userdata('status');
		}
		else{
			//Binding from data from view into array $Data
			$data['odate'] = $this->input->post('odate');
			$data['cname'] = $this->input->post('cname');
			$data['product'] = $this->input->post('product');
			$data['oquantity'] = $this->input->post('oquantity');
			$data['invoiceno'] = $this->input->post('invoiceno');
			

			if ($result) {
				$this->session->set_flashdata('status', '<div class="alert_green" style="width:100%">New Report Was Successfully Added!</div>');
				$this->load->view('header');
				$this->load->view('order_view', $data);
				$this->load->view('footer');
				$this -> session -> unset_userdata('status');
			}else{
				$this->session->set_flashdata('status', '<div class="alert" style="width:500px">Error! Please Try Again!!</div>');
				$this->load->view('header');
				$this->load->view('order_view');
				$this->load->view('footer');
				$this -> session -> unset_userdata('status');
			}
		}

	}
}//end of class