<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories_model extends CI_Model {
    
	function selectAll(){
		$this->db->order_by("CategoryID","ASC");
		return $this->db->get('categories')->result();
	}
}	
?>
