<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suppliers_model extends CI_Model {
    
	function selectAll(){
		$this->db->order_by("SupplierID","ASC");
		return $this->db->get('suppliers')->result();
	}
}	
?>
