<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuPizza extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }
	public function index()
	{
        $dl = $this->menu_model->loadpizza(); 
		$mangdl =  array(
			'dulieutin' => $dl,
			);
		$this->load->view('menupizza',$mangdl);
        
    }
    
}
