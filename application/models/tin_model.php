<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDanhMuc($tendanhmuc)
	{
		$dl = array(
			'tendanhmuc' =>  $tendanhmuc
			);
		return $this->db->insert('danhmuctin', $dl);
	}
	public function loadDanhsach()
	{
		$this->db->select('*');	
		$dl = $this->db->get('danhmuctin');
		$dl = $dl->result_array();
		return $dl;
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
	

	// model cho tin tuc 
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
	public function loadDanhSachTin()
	{
		$this->db->select('*');
		$dl = $this->db->get('tintuc');
		$dl = $dl->result_array();
		return $dl ; 
		
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

	public function deleteTinById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tintuc');
	}

	public function loadFeatures()
	{		   
		$this->db->select('*');	
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left'); 
		$ketqua = $this->db->get('danhmuctin',0);
		$ketqua = $ketqua->result_array();
		return $ketqua; 				 
	}
	public function loadTinTheoDanhMuc($idDanhMuc)	{		   
		$this->db->select('*');	
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left'); 
		$this->db->where('tintuc.iddanhmuc', $idDanhMuc);
		$ketqua = $this->db->get('danhmuctin',0);
		$ketqua = $ketqua->result_array();
		return $ketqua; 				 
	}
	public function getIddanhmucByIdTin($id)
	{
		$this->db->select('*');
		$this->db->from('danhmuctin');		 
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$this->db->where('tintuc.id', $id);
		$ketqua = $this->db->get();
		$ketqua = $ketqua->result_array();
		$iddanhmuc = $ketqua[0]['iddanhmuc'] ; 
		return $iddanhmuc ; 
	}
	public function updateHeaderJson($dulieu)
	{
		$dl = array(
			'tenthuoctinh' => 'QuanLyHeader', 
			'id' => '2', 
			'giatrithuoctinh' => $dulieu
			);
		$this->db->where('tenthuoctinh', 'QuanLyHeader');
		return $this->db->update('homepageattr', $dl);
	}

	public function laydulieuHeader()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'QuanLyHeader');
		$dl = $this->db->get('homepageattr');
		$dl = $dl->result_array();
		$dl = $dl[0]['giatrithuoctinh'];
		 return $dl ;
		 

	}
}

/* End of file Tin_model.php */
/* Location: ./application/models/Tin_model.php */