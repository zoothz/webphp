<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Do_add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('slides_model');

	}

	public function index()
	{
		$this->load->view('addData_View');
	}

	public function addSlide()
	{

		// lấy dữ liệu từ trường tên là slides_topbanner ra 

		$dulieu = $this->slides_model->layDuLieuSlide();


		// giai mã json 
		$dulieu = json_decode($dulieu,true);
		if($dulieu == null) {
			echo ' du lieu dang trong ';
			$dulieu = array(); 
		}

		// lay du lieu tu view 
		
		//$slide_image = base_url().'uploads/'.basename($_FILES["slide_image"]["name"]);
		// file thi lay tu w3school 
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
		    if($check !== false) {
		      //  echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		       // echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		
		$title = $this->input->post('title');
		$description = $this->input->post('description');


		
		//
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["slide_image"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		 
		$slide_image = base_url(). 'uploads/'.basename($_FILES["slide_image"]["name"]); 

 
		
		 
		// them noi dung vao json dung ham array push 
		$motslideanh = array(
			
			'slide_image' => $slide_image
			);
		 array_push($dulieu, $motslideanh);

		

		// ma hoa lai thanh json, 
		$dulieu = json_encode($dulieu);
		
		//   update lại dữ liệu 

		if($this->slides_model->updateDuLieuSlide($dulieu))
		{
			$this->load->view('thanhcong');
		}
	}

	public function suaSlide()
	{
		// lay ve noi dung tu view 
		
	 	
		// lay ve that ca cac anh , roi upload len 
		$cacanh = $_FILES['slide_image']['name']; // luu tru ten file
		$filevatly = $_FILES['slide_image']['tmp_name']; // file that 

		$slide_image =  array(); 
		$slide_image_old = $this->input->post('slide_image_old');
		// duyet mang de lay ten tung file
		for ($i=0; $i < count($cacanh ) ; $i++) { 			  
			 if(empty($cacanh[$i]))
			 {
			 	$slide_image[$i] = $slide_image_old[$i]; 
			 }
			 else {
			 	$duongdan = 'uploads/'.$cacanh[$i]; 
			 	move_uploaded_file($filevatly[$i], $duongdan); 
			 	$slide_image[$i] = base_url()."uploads/".$cacanh[$i];
			 }			 
			  
		}

 		// $slide_image chua toan bo ten file minh can 
	
		// tao mot mang "tatcaslide"
		$tatcaslide = array();

		// insert tung phan tu vao mang tatcaslide
		for ($i=0; $i < count($title) ; $i++) { 
			$tam = array();
			$tam['slide_image'] = $slide_image[$i];
			array_push($tatcaslide, $tam) ;
		}
 
		// dua thanh json 
		$tatcaslide = json_encode($tatcaslide);

		// goi model update du lieu 
		$this->load->model('slides_model');
		if($this->slides_model->updateDuLieuSlide($tatcaslide))
		{
			$this->load->view('thanhcong');
		}
		else {
			// cac ban tu lam 
		}
	}

}

/* End of file Slides.php */
/* Location: ./application/controllers/Slides.php */