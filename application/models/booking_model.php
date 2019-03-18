<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class booking_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function booking($tenkh,$emailkh,$sdt,$ngaydatban,$giodatban,$songuoi)
	{
		$khachhang = array(
			'tenkh' => $tenkh,
			'emailkh' => $emailkh,
			'sdt' => $sdt,
			'ngaydatban' => $ngaydatban,
			'giodatban' => $giodatban,
			'songuoi' => $songuoi
			 );
		 
		return $this->db->insert('datban', $khachhang);
	}

}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */