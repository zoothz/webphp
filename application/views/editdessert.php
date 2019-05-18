<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>vendor/jquery.min.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
     <link rel="stylesheet" href="<?= base_url() ?>assets/css/1.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-light bg-faded">
          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
          </button>
          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <a class="navbar-brand" href="<?= base_url()?>admin/menuquanly">Backend slide</a>
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>admin/danhmucpizza">Menu Pizza <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/danhmucfood">menu Food</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/danhmucdessert">Menu Dessert</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="row">
            <div class="col-sm-6">
                <div class="jumbotron jumbotron-fluid text-xs-center">
					<div class="container">
					    <h1 class="display-5">Thêm dessert</h1>
					    <p class="lead">Form này cho phép thêm danh mục tin và cơ sở dữ liệu.</p>
				</div>
                <form action="<?= base_url(); ?>admin/themmoidessert" method="post" enctype="multipart/form-data">		
                    <fieldset class="form-group">
						<label for="formGroupExampleInput">Tên</label>
						<input name="ten" type="text" class="form-control" id="formGroupExampleInput" placeholder="Tên">
					</fieldset>	
                    <fieldset class="form-group">
						<label for="formGroupExampleInput">giá</label>
						<input name="gia" type="text" class="form-control" id="formGroupExampleInput" placeholder="giá">
					</fieldset>	
                    <fieldset class="form-group">
						<label for="formGroupExampleInput">Ảnh</label>
						<input name="anhdessert" type="file" class="form-control" placeholder="Ảnh">
					</fieldset>
					
					<fieldset class="form-group">
						<input type="submit" class="btn btn-outline-primary btn-block btn-lg" value="Thêm">
					</fieldset>
                </form>
                </div>
            </div>
            <div class="col-sm-6 danhsach">
						<div class="jumbotron text-xs-center">
						<h1 class="display-3">Danh sách danh mục tin </h1>
							<p class="lead">Các danh mục tin đã thêm .</p>
                    </div>
			 	<!-- khoi danh sach tin  -->
				<div class="row">					
					<div class="card-group">
					<?php foreach ($dulieu as $value): ?>
                    <div class="col-sm-4">
								<div class="card">
								<?php 
									if(empty($value['anhdessert'])){
								 ?>
									<img class="card-img-top img-fluid" src="http://placehold.it/700x300" alt="Card image cap">
								 <?php }
								 else { ?>
									<img class="card-img-top img-fluid" src="<?= $value['anhdessert'] ?>" alt="Card image cap">
									<?php } ?>
									<div class="card-block">
										<h4 class="card-title"><?= $value['ten'] ?></h4>

				                    <a href="<?= base_url(); ?>admin/suadessert/<?= $value['id'] ?>" class="btn btn-outline-success sua"><i class="fa fa-pencil"></i></a>
									</div>
								</div>							 
							</div>
					<?php endforeach ?>		
					</div>
				</div>				
			 	<!-- het khoi danh sach tin  -->
			</div>
        </div>
    </div>
    <script> 
    
 	</script>
</body>
</html>