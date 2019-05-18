<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuFood extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }
	public function index()
	{
        $dl = $this->menu_model->loadfood(); 
		$mangdl =  array(
			'dulieutin' => $dl,
			);
		$this->load->view('menufood',$mangdl);
    }
    
}
