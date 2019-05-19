<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="<?= base_url() ?>/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>/1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>/1.css">
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-light bg-faded">
          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
          </button>
          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <a class="navbar-brand" href="<?= base_url()?>admin/menuquanly">From ADMIN</a>
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>admin/danhmucpizza">Menu Pizza <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/danhmucfood">Menu Food</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/danhmucdessert">Menu Dessert</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/danhmuctin">Danh Muc Tin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/quanlytin">Quan Lý Tin</a>
              </li>
            </ul>
          </div>
        </nav>
		<div class="row">
			<div class="col-sm-6 push-sm-3">
		        <div class="jumbotron jumbotron-fluid">
					<div class="container">
						<h1 class="display-5">Sửa danh mục tin </h1>
						<p class="lead">Form này cho phép sửa danh mục tin  </p>
					</div>
				</div>
				<form action="<?php echo base_url(); ?>/adminupdatedanhmuc" method="post">
					<?php foreach ($mangdl as $value): ?>	
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tên danh mục</label>
							<input type="hidden" name="id" value="<?= $value['id'] ?>">
							<input name="tendanhmuc" type="text" class="form-control" id="formGroupExampleInput" 
							value="<?= $value['tendanhmuc'] ?>"
							>
						</fieldset>
					<?php endforeach ?>
					<fieldset class="form-group">
 						<input type="submit" class="form-control" value="Lưu">
					</fieldset>
				</form>
			</div> <!-- end cot trai -->
		</div>
	</div>	
</body>
</html>