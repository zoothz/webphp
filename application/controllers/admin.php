
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin_model');
    }
	public function index()
	{
        $this->load->view('admin');
        
    }
	public function menuquanly()
	{
		$this->load->view('menuquanly');
	}
	
    public function danhmucpizza()
	{
		// goi danh muc tin model lay du lieu		
		$ketqua =  $this->admin_model->loadPizza();
		$ketqua = array(
            'dulieu' => $ketqua 
        );		
		$this->load->view('editpizza',$ketqua);

    }
    
	public function themmoipizza()
	{
		// xu ly anh tin 

			$target_dir = "uploads/pizza/";
			$target_file = $target_dir . basename($_FILES["anhpizza"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["anhpizza"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["anhpizza"]["size"] > 500000) {
			   // echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["anhpizza"]["tmp_name"], $target_file)) {
			      //  echo "The file ". basename( $_FILES["anhtin"]["name"]). " has been uploaded.";
			    } else {
			       // echo "Sorry, there was an error uploading your file.";
			    }
			}
		 $anh = base_url() .'uploads/pizza/'. basename( $_FILES["anhpizza"]["name"]) ; 
		$ten = $this->input->post('ten');
		$gia = $this->input->post('gia');
  

		if($this->admin_model->insertpizza($ten,$gia,$anh))
		{
			$this->load->view('thanhcong2');
		}
		else 
		{
			$this->load->view('thatbai1');
		}
    }
    public function suapizza($id)
	{
		$ketqua = $this->admin_model->getpizzaById($id);

		$dulieu = array(
			'dulieusua'=> $ketqua,
			); 

		$this->load->view('suapizza', $dulieu, FALSE);
	}
    
	public function updatepizza()
	{
		$anhcu = $this->input->post('anhcu');
		$anhpizza = $_FILES['anhpizza']['name'];
		// neu ko up anh moi 
		if(empty($anh)){
			$anh = $anhcu ;
			//neu co up load anh  
		}
		else 
		{
			// xu ly anh tin 

			$target_dir = "uploads/pizza/";
			$target_file = $target_dir . basename($_FILES["anhpizza"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["anhpizza"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["anhpizza"]["size"] > 500000) {
			   // echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["anhpizza"]["tmp_name"], $target_file)) {
			      //  echo "The file ". basename( $_FILES["anh"]["name"]). " has been uploaded.";
			    } else {
			       // echo "Sorry, there was an error uploading your file.";
			    }
			}
		 	$anh = base_url() .'uploads/pizza/'. basename( $_FILES["anhpizza"]["name"]) ; 
		}


		// goi model 
		$ten = $this->input->post('ten');
		$gia = $this->input->post('gia');
		$id = $this->input->post('id');
  

		if($this->admin_model->updatePizzaById($id,$ten,$gia,$anh))
		{
			$this->load->view('thanhcong2');
		}
		else 
		{
			$this->load->view('thatbai1');
		}
    }
    
	public function xoapizza($id)
	{
		$this->admin_model->deletePizzaById($id);
		 
		$this->load->view('thanhcong1');		 
    }
    
	public function addJquery()
	{
		$ten = $this->input->post('ten');
		$this->load->model('admin_model');
		$this->admin_model->insertDanhMuc($ten); 
		 
	 	echo json_encode($this->db->insert_id()); 
    }
    /***/
    public function danhmucdessert()
	{
		// goi danh muc tin model lay du lieu		
		$ketqua =  $this->admin_model->loaddessert();
		$ketqua = array(
            'dulieu' => $ketqua 
        );		
		$this->load->view('editdessert',$ketqua);

    }
    
	public function themmoidessert()
	{
		// xu ly anh tin 

			$target_dir = "uploads/dessert/";
			$target_file = $target_dir . basename($_FILES["anhdessert"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["anhdessert"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["anhdessert"]["size"] > 500000) {
			   // echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["anhdessert"]["tmp_name"], $target_file)) {
			      //  echo "The file ". basename( $_FILES["anhtin"]["name"]). " has been uploaded.";
			    } else {
			       // echo "Sorry, there was an error uploading your file.";
			    }
			}
		 $anh = base_url() .'uploads/dessert/'. basename( $_FILES["anhdessert"]["name"]) ; 
		$ten = $this->input->post('ten');
		$gia = $this->input->post('gia');
  

		if($this->admin_model->insertdessert($ten,$gia,$anh))
		{
			$this->load->view('thanhcong2');
		}
		else 
		{
			$this->load->view('thatbai1');
		}
    }
    public function suadessert($id)
	{
		$ketqua = $this->admin_model->getdessertById($id);

		$dulieu = array(
			'dulieusua'=> $ketqua,
			); 

		$this->load->view('suadessert', $dulieu, FALSE);
	}
    
	public function updatedessert()
	{
		$anhcu = $this->input->post('anhcu');
		$anhdessert = $_FILES['anhdessert']['name'];
		// neu ko up anh moi 
		if(empty($anh)){
			$anh = $anhcu ;
			//neu co up load anh  
		}
		else 
		{
			// xu ly anh tin 

			$target_dir = "uploads/dessert/";
			$target_file = $target_dir . basename($_FILES["anhdessert"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["anhdessert"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["anhdessert"]["size"] > 500000) {
			   // echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["anhdessert"]["tmp_name"], $target_file)) {
			      //  echo "The file ". basename( $_FILES["anh"]["name"]). " has been uploaded.";
			    } else {
			       // echo "Sorry, there was an error uploading your file.";
			    }
			}
		 	$anh = base_url() .'uploads/dessert/'. basename( $_FILES["anhdessert"]["name"]) ; 
		}


		// goi model 
		$ten = $this->input->post('ten');
		$gia = $this->input->post('gia');
		$id = $this->input->post('id');
  

		if($this->admin_model->updatedessertById($id,$ten,$gia,$anh))
		{
			$this->load->view('thanhcong2');
		}
		else 
		{
			$this->load->view('thatbai1');
		}
    }
    
	public function xoadessert($id)
	{
		$this->admin_model->deleteDessertById($id);
		 
		$this->load->view('thanhcong1');		 
    }

    /**** */
    public function danhmucfood()
	{
		// goi danh muc tin model lay du lieu		
		$ketqua =  $this->admin_model->loadFood();
		$ketqua = array(
            'dulieu' => $ketqua 
        );		
		$this->load->view('editfood',$ketqua);

    }
    
	public function themmoifood()
	{
		// xu ly anh tin 

			$target_dir = "uploads/food/";
			$target_file = $target_dir . basename($_FILES["anhfood"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["anhfood"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["anhfood"]["size"] > 500000) {
			   // echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["anhfood"]["tmp_name"], $target_file)) {
			      //  echo "The file ". basename( $_FILES["anhtin"]["name"]). " has been uploaded.";
			    } else {
			       // echo "Sorry, there was an error uploading your file.";
			    }
			}
		 $anh = base_url() .'uploads/food/'. basename( $_FILES["anhfood"]["name"]) ; 
		$ten = $this->input->post('ten');
		$gia = $this->input->post('gia');
  

		if($this->admin_model->insertfood($ten,$gia,$anh))
		{
			$this->load->view('thanhcong2');
		}
		else 
		{
			$this->load->view('thatbai1');
		}
    }
    public function suafood($id)
	{
		$ketqua = $this->admin_model->getfoodById($id);

		$dulieu = array(
			'dulieusua'=> $ketqua,
			); 

		$this->load->view('suafood', $dulieu, FALSE);
	}
    
	public function updatefood()
	{
		$anhcu = $this->input->post('anhcu');
		$anhfood = $_FILES['anhfood']['name'];
		// neu ko up anh moi 
		if(empty($anh)){
			$anh = $anhcu ;
			//neu co up load anh  
		}
		else 
		{
			// xu ly anh tin 

			$target_dir = "uploads/food/";
			$target_file = $target_dir . basename($_FILES["anhfood"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["anhfood"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["anhfood"]["size"] > 500000) {
			   // echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["anhfood"]["tmp_name"], $target_file)) {
			      //  echo "The file ". basename( $_FILES["anh"]["name"]). " has been uploaded.";
			    } else {
			       // echo "Sorry, there was an error uploading your file.";
			    }
			}
		 	$anh = base_url() .'uploads/food/'. basename( $_FILES["anhfood"]["name"]) ; 
		}


		// goi model 
		$ten = $this->input->post('ten');
		$gia = $this->input->post('gia');
		$id = $this->input->post('id');
  

		if($this->admin_model->updateFoodById($id,$ten,$gia,$anh))
		{
			$this->load->view('thanhcong2');
		}
		else 
		{
			$this->load->view('thatbai1');
		}
    }
    
	public function xoafood($id)
	{
		$this->admin_model->deleteFoodById($id);
		 
		$this->load->view('thanhcong1');		 
    }
}
