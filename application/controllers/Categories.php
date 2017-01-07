<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller	{
	public function __construct()	{
		parent::__construct();
		$this->load->model('Categories_model','CM');
	}
	
	public function index()	{
		$data['title'] = 'Data Categories';
		$this->my_template->loadAdmin('categories/categories',$data);
	}
	
	public function ajax_list() {
		$list = this->CM->getdatatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $category) {
			$no++;
			$row = array();
			$row[] = $category->CategoryID;
			$row[] = $category->CategoryName;
			$row[] = $category->Description;
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_categories('."'".$category->CategoryID."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
					  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_categories('."'".$category->CategoryID."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}
		
		$output = array(
					"draw" => $_POST['draw'],
					"recordsTotal" =>$this->CM->count_all(),
					"recordsFiltered" =>$this->CM->countfiltered(),
					"data" => $data,
		);
		echo json_encode($output);
	}
	
	public function ajax_edit($id) {
		$data = $this->CM->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_add() {
		$this->_validate();
		$data = array(
					'CategoryName' => $this->input->Post('CategoryName'),
					'Description' => $this->input->Post('Description'),
					);
		$insert = $this->CM->save($data);
		echo json_encode(array("status" => TRUE));
	}
	
	public function ajax_update() {
		$this->_validate();
		$data = array(
					'CategoryName' => $this->input->Post('CategoryName'),
					'Description' => $this->input->Post('Description'),
					);
		$this->CM->update(array('CategoryID' => $this->input->Post($id)), $data);
		echo json_encode(array("status" => TRUE));
	}
	
	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		if ($this->input->('CategoryName')=='')
		{
			$data = array();
			$data['inputerror'][] = 'CategoryName';
			$data['errorstring'] = 'CategoryName is required';
			$data['status'] = FALSE;
		}
		
		if ($this->input->('Description')=='')
		{
			$data = array();
			$data['inputerror'][] = 'Description';
			$data['errorstring'] = 'Description is required';
			$data['status'] = FALSE;
		}
		
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}