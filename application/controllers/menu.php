
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
}
