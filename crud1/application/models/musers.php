<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers extends CI_Model {

	public function getAll() {

		//get all records from users table
		$query = $this->db->get('crud1');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}

	} //end getAll

}

/* End of file musers.php */
/* Location: ./application/models/musers.php */