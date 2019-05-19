<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('booking_model');
		
    }
	public function index()
	{
        $this->load->model('slides_model');
		$dl = $this->slides_model->layDuLieuSlide();
		$dl = array('mangdl' => $dl );
		$this->load->view('home',$dl);
	}
	public function Booking()
	{
		$tenkh = $this->input->post('tenkh');
		$email = $this->input->post('email');
		$sdt = $this->input->post('sdt');
		$ngaydatban = $this->input->post('ngaydatban');
		$giodatban = $this->input->post('giodatban');
		$songuoi = $this->input->post('songuoi');


		$this->load->model('booking_model');
		if($this->booking_model->booking($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi)){
			redirect('home/datbanthanhcong');

		}
		else {
			echo "f";
		}

/*
		if($this->booking_model->booking($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi))
		{
			
				// gui mail cho chủ nhà hàng thông báo có người vừa đặt bàn 
				$mail = new PHPMailer;

				//$mail->SMTPDebug = 3;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'doandinh1998@gmail.com';                 // SMTP username
				$mail->Password = 'xysmjdfgvnjptvtd';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to

				
				$mail->setFrom('viet@fedu.vn', "Thong bao" );
				$mail->addAddress("vietndj@gmail.com");     // Add a recipient
				// $mail->addAddress('ellen@example.com');               // Name is optional
				// $mail->addReplyTo('info@example.com', 'Information');
				// $mail->addCC('cc@example.com');
				// $mail->addBCC('bcc@example.com');

				// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				  $mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "Thông báo có khách vừa đặt bàn tên là : " .$tenkh ."và mobile " .$sdt;
				$mail->Body    = "Tên : " . $tenkh . "\n" . "Điện thoại : " .$sdt ." Thời gian : ngày". $a ."lúc".$b;
				//	echo  "Tên : " . $tenkh . "<br/>" . "Điện thoại : " .$sdt ." Thời gian : ngày". $a ."lúc".$b;
				//die();
				//	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				$mail->Charset = "UTF-8";

					if(!$mail->send()) {
					    echo 'Message could not be sent.';
					    echo 'Mailer Error: ' . $mail->ErrorInfo;
					    $this->load->view('thatbai');
					} else {
					    echo 'Thư đã được gửi rồi .';
					}
					$this->load->view('thanhcong');

				}
		else{
			$this->load->view('thatbai');
		}*/
	}
	public function datbanthanhcong()
	{
		$this->load->view('datbanthanhcong');
	}
	
}
