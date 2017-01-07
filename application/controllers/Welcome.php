<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Categories_model');
		$this->load->model('Products_model');
		$this->load->model('Customers_model');
		$this->load->model('Employees_model');
		$this->load->model('Shippers_model');
		$this->load->model('Suppliers_model');
	}

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
	public function index()
	{
		$data['title']='Data Categories';
		$data['categories']=$this->Categories_model->selectAll();
		$data['title']='Data Products';
		$data['products']=$this->Products_model->selectAll();
		$data['title']='Data Customers';
		$data['customers']=$this->Customers_model->selectAll();
		$data['title']='Data Employees';
		$data['employees']=$this->Employees_model->selectAll();
		$data['title']='Data Shippers';
		$data['shippers']=$this->Shippers_model->selectAll();
		$data['title']='Data Suppliers';
		$data['suppliers']=$this->Suppliers_model->selectAll();
		$this->load->view('header');
		$this->load->view('konten',$data);
		$this->load->view('footer');
	}
}
