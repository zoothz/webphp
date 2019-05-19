<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tin_model');
	}

	public function index()
	{
		
	}
	public function danhmuctin()
	{
		// goi danh muc tin model lay du lieu		
		$ketqua =  $this->tin_model->loadDanhsach();
		$ketqua = array('dulieu' => $ketqua );		
		$this->load->view('danhmuctin',$ketqua);

	}

}

/* End of file Tin.php */
/* Location: ./application/controllers/Tin.php */