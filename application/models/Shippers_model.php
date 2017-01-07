<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shippers_model extends CI_Model {
    
	function selectAll(){
		$this->db->order_by("ShipperID","ASC");
		return $this->db->get('shippers')->result();
	}
}	
?>
