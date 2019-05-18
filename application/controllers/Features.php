<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tin_model');
    }
	public function index()
	{
        $dl = $this->tin_model->loadFeatures(); 
		$danhmuc = $this->tin_model->loadDanhsach();
		$mangdl =  array(
			'dulieutin' => $dl,
			'cacdanhmuc' => $danhmuc
			);
		$this->load->view('features',$mangdl);
	}
	public function tin($idDanhMuc)
	{
		$dl = $this->tin_model->loadTinTheoDanhMuc($this->idDanhMuc);
		$danhmuc = $this->tin_model->loadDanhsach();

		$mangdl =  array(
			'dulieutin' => $dl,
			'cacdanhmuc' => $danhmuc
			 );
		 $this->load->view('features',$mangdl);
	}
    
}
