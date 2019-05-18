<html lang="en">
<head>
<head>
      <title>Quản Lý Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <style>
.form-control{margin-bottom: 10px;}
  </style>
  </head>
  <body>
      
  </body><style>
    li.open .dropdown-menu .dropdown:hover .dropdown-menu {
	display: block;
	top: -25%;
	right: 100%;
}

li.open .dropdown-menu .dropdown .caret {
	display: none;
}

li.open .dropdown-menu .dropdown > a:before {
	display:block;
	content:" ";
	float:left;
	width:0;
	height:0;
	border-color:transparent;
	border-style:solid;
	border-width:5px 5px 5px 0;
	border-right-color:#999;
	margin-top:5px;
	margin-left:-10px;
}
</style>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a href="<?= base_url()?>AdminQL" class="navbar-brand">Quản lý</a>
		</div>
		<div class="navbar-collapse collapse navbar-right">
		        <ul class="nav navbar-nav">
				<li><a href="film.php"><i class="fa fa-link"></i> Thêm phim</a></li>
				<li><a href="khophim.php"><i class="fa fa-link"></i> Danh sách phim</a></li>
					<li><a href="backlink.php"><i class="fa fa-link"></i> Backlink</a></li>
				<li><a href="caidat.php"><i class="fa fa-link"></i> Cài đặt</a></li>
				<li><a href="UP.php"><i class="fa fa-link"></i> Upload ảnh lên Imgur</a></li>
	<li><a href="account.php"><i class="fa fa-link"></i> Thêm account admin</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> admin1 <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="thaypass.php">Đổi mật khẩu</a></li>
						<li class="divider"></li>
						<li><a href="out.php">Đăng xuất</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>