<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employees_model extends CI_Model {
    
	function selectAll(){
		$this->db->order_by("EmployeeID","ASC");
		return $this->db->get('employees')->result();
	}
}	
?>
