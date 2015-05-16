<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Model {

	public function save_data($v) {

		$this->db->insert('crud1', $v);
	}
// 	public function mcrud() {
	// 		$d = $this->db->get_where('crud', array('idcrud' => $a))->row();
	// 		return $d;
	// 	}
}

/* End of file save.php */
/* Location: ./application/models/save.php */