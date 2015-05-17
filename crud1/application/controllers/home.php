<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$this->home();
	}

	public function home() {

		$query = $this->db->get('crud1');

		$data = array("result" => $query->result());
		$this->load->view('body', $data);

	}
	public function save() {

		$firstname = $this->input->post('first_name');
		$lastname = $this->input->post('last_name');
		$age = $this->input->post('age');
		$gender = $this->input->post('gender');
		//$date = $this->input->post('date');
		$city = $this->input->post('city_name');
		$address = $this->input->post('address');

		$data = array('first_name' => $firstname, 'last_name' => $lastname, 'age' => $age, 'gender' => $gender, 'city_name' => $city,
			'address' => $address);

		$this->load->model('save');
		$this->save->save_data($data);
		redirect();

	}
	public function edit() {
		$id = $this->input->get('id');
		// $kd = $this->uri->segment(3);
		// if ($kd == NULL) {
		// 	redirect();
		// }
		// $dt = $this->save->mcrud($kd);
		// $data['fn'] = $dt->first_name;
		// $data['ln'] = $dt->last_name;
		// $data['ag'] = $dt->age;
		// $data['ge'] = $dt->gender;
		// $data['ad'] = $dt->address;
		// $data['id'] = $kd;
		$firstname = $this->input->post('first_name');
		$lastname = $this->input->post('last_name');
		$age = $this->input->post('age');
		$gender = $this->input->post('gender');
		$city = $this->input->post('city_name');
		$address = $this->input->post('address');

		$data = array('first_name' => $firstname, 'last_name' => $lastname, 'age' => $age, 'gender' => $gender, 'city_name' => $city,
			'address' => $address);
		$this->db->where('id', $id);
		$this->db->update('crud1', $data);
		redirect();
	}

	public function delete() {
		$id = $this->input->get('id');
		$this->db->delete('crud1', array('id' => $id));
		redirect();
	}
	public function autocomplete() {

		$query = $this->db->get('crud1', array('city_name'));
		echo "string";
		// return $data = $query->result();
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */