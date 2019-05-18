<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		
	}
	//Pizza
	public function loadPizza()
	{
		$this->db->select('*');	
		$dl = $this->db->get('pizza');
		$dl = $dl->result_array();
		return $dl;
	}
	////Food
	public function loadFood()
	{
		$this->db->select('*');	
		$dl = $this->db->get('food');
		$dl = $dl->result_array();
		return $dl;
	}
	////Dessert
	public function loadDessert()
	{
		$this->db->select('*');	
		$dl = $this->db->get('dessert');
		$dl = $dl->result_array();
		return $dl;
	}
}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */