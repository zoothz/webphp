<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="6; url=<?= base_url() ?>home">
	<title>Đặt bàn thành công</title>

	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 

 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>
	<div class="container">
		<br>
		<br>
		<br>
		<div class="alert alert-info" role="alert">
            <strong>Chuc mung !</strong> <p>Bạn đã thao tác thành công </p>
            <strong>vui lòng chờ </strong> <span id="time">00:05</span> Giây <p> Loading home</p>
        </div>        
        <br>
	</div>
		<script>
            function startTimer(duration, display) {
                var timer = duration, minutes, seconds;
                setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
            }

            window.onload = function () {
                var s = 01 * 05 ,
                    display = document.querySelector('#time');
                startTimer(s, display);
            };
        </script>
</body>
</html>