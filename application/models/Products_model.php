<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {
    
	function selectAll(){
		$this->db->order_by("ProductID","ASC");
		return $this->db->get('products')->result();
	}
}	
?>
