<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers_model extends CI_Model {
    
	function selectAll(){
		$this->db->order_by("CustomerID","ASC");
		return $this->db->get('customers')->result();
	}
}	
?>
