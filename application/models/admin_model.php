<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		
	}
	public function DangNhap()
	{
		
	}
	//Pizza
	public function insertPizza($ten,$gia,$anh)
	{
		$dulieu = array(
			'ten' => $ten, 
			'gia' => $gia, 
			'anhpizza' => $anh
			);
			return $this->db->insert('pizza', $dulieu);
	}
	public function loadPizza()
	{
		$this->db->select('*');	
		$dl = $this->db->get('pizza');
		$dl = $dl->result_array();
		return $dl;
	}
	public function getPizzaById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('pizza');
		$dl =  $dl->result_array();
		return $dl;
	}
	public function updatePizzaById($id,$ten,$gia,$anh)
	{
		$dlupdate = array(
			'ten' => $ten, 
			'gia' => $gia, 
			'anhpizza' => $anh
			 );
		$this->db->where('id', $id);
		return $this->db->update('pizza', $dlupdate);
	}
	public function deletePizzaById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pizza');
	}
	////Food
	public function insertFood($ten,$gia,$anh)
	{
		$dulieu = array(
			'ten' => $ten, 
			'gia' => $gia, 
			'anhfood' => $anh
			);
		return $this->db->insert('food', $dulieu);
	}
	public function loadFood()
	{
		$this->db->select('*');	
		$dl = $this->db->get('food');
		$dl = $dl->result_array();
		return $dl;
	}
	public function getFoodById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('food');
		$dl =  $dl->result_array();
		return $dl;
	}
	public function updateFoodById($id,$ten,$gia,$anh)
	{
		$dlupdate = array(
			'ten' => $ten, 
			'gia' => $gia, 
			'anhfood' => $anh
			 );
		$this->db->where('id', $id);
		return $this->db->update('food', $dlupdate);
	}
	public function deleteFoodById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('food');
	}
	////Dessert
	public function insertDessert($ten,$gia,$anh)
	{
		$dulieu = array(
			'ten' => $ten, 
			'gia' => $gia, 
			'anhdessert' => $anh
			);
		return $this->db->insert('dessert', $dulieu);
	}
	public function loadDessert()
	{
		$this->db->select('*');	
		$dl = $this->db->get('dessert');
		$dl = $dl->result_array();
		return $dl;
	}
	public function getDessertById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('dessert');
		$dl =  $dl->result_array();
		return $dl;
	}
	public function updateDessertById($id,$ten,$gia,$anh)
	{
		$dlupdate = array(
			'ten' => $ten, 
			'gia' => $gia, 
			'anhdessert' => $anh
			 );
		$this->db->where('id', $id);
		return $this->db->update('dessert', $dlupdate);
	}
	public function deleteDessertById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('dessert');
	}


}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */