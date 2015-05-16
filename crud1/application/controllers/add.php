<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Do your magic here
	}

	public function index() {
		$this->add();
	}

	public function add() {

		$this->load->view('add_member');

	}
}

/* End of file add.php */
/* Location: ./application/controllers/add.php */