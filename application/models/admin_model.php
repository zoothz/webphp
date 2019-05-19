<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		
	}
	public function loadAdmin()
	{
		$this->db->select('*');	
		$dl = $this->db->get('admin');
		$dl = $dl->result_array();
		return $dl;
	}
	public function dangnhap($account,$passad)
	{
		$this->db->select('*');
		$this->db->where('account',$account);
		$this->db->where('passad',$passad);
		$dl = $this->db->get('admin');
		$dl = $dl->result_array();
		return $dl;
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
	/*** */
	
	
	public function insertDanhMuc($tendanhmuc)
	{
		$dl = array(
			'tendanhmuc' =>  $tendanhmuc
			);
		return $this->db->insert('danhmuctin', $dl);
	}
	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('danhmuctin');
		$dl =  $dl->result_array();
		return $dl;
	}
	public function updateById($id,$tendanhmuc)
	{
		$dlupdate = array(
			'id' => $id,
			'tendanhmuc' => $tendanhmuc
			 );
		$this->db->where('id', $id);
		return $this->db->update('danhmuctin', $dlupdate);
	}
	public function deleteById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('danhmuctin');
	}

	/*** */
	public function insertTin($tieude,$iddanhmuc,$noidung,$anhtin)
	{

		$dulieu = array(
			'tieude' => $tieude, 
			'iddanhmuc' => $iddanhmuc, 
			'anhtin' => $anhtin, 
			'noidung' => $noidung,
			);
		$this->db->insert('tintuc', $dulieu);
		 
		return $this->db->insert_id();
	}
	public function updateTinById($Id,$tieude,$iddanhmuc,$noidung,$anhtin)
	{
		$dulieusua = array(
			'id' =>  $Id, 
			'tieude' =>  $tieude, 
			'iddanhmuc' =>  $iddanhmuc, 
			'anhtin' =>  $anhtin, 
			'noidung' =>  $noidung
			);
		$this->db->where('id', $Id);
		return $this->db->update('tintuc', $dulieusua);

	}
	public function deleteTinById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tintuc');
	}
	public function getTinById($id)
	{
		 $this->db->select('*');
 		$this->db->from('danhmuctin');
		 
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');

	 	$this->db->where('tintuc.id', $id); 
		 $ketqua = $this->db->get();
		 $ketqua = $ketqua->result_array();
		 return $ketqua; 
	}

	public function getTendanhmucByIdTin($id)
	{
		$this->db->select('*');
		$this->db->from('danhmuctin');		 
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$this->db->where('tintuc.id', $id);
		$ketqua = $this->db->get();
		$ketqua = $ketqua->result_array();
		$ten = $ketqua[0]['tendanhmuc'] ; 
		return $ten ; 
	}

	

}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */