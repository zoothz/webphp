<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa food </title>
	<link rel="stylesheet" href="<?= base_url() ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>/1.css">
</head>
<body><div class="container">
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
    </div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 push-sm-1">
				<div class="jumbotron text-xs-center">
							<h1 class="display-3">Sửa 1 tin food</h1>
							<p class="lead">Sửa nội dung của 1 tin.</p>
							<hr class="m-y-md">
							 
						</div>
					<div class="formthemmoi">
						<form action="<?= base_url(); ?>admin/updatefood" method="post" enctype="multipart/form-data">
                        <?php foreach ($dulieusua as $value): ?>
							<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Tên</label>
								<input value="<?php echo $value['ten'] ?>" name="ten" type="text" class="form-control" id="formGroupExampleInput"  >
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Giá</label>
								<input value="<?php echo $value['gia'] ?>" name="gia" type="text" class="form-control" id="formGroupExampleInput"  >
							</fieldset>
							<fieldset class="form-group">
							<img src="<?php echo $value['anhfood'] ?>" alt="" class="img-fluid">
							<input type="hidden" value="<?php echo $value['anhfood'] ?>" name="anhcu">
								<label for="formGroupExampleInput">Ảnh tin</label>
 								<input name="anhfood" type="file" class="form-control" placeholder="Ảnh food ">
							</fieldset>
							
							<fieldset class="form-group">
							<div class="row">
								<div class="col-sm-6">								
								<input type="submit" class="btn btn-outline-info btn-block btn-lg" value="Lưu ">
								</div>
								<div class="col-sm-6">
								
								<a href="<?= base_url(); ?>admin/xoafood/<?php echo $value['id'] ?>" class="btn btn-outline-danger btn-block btn-lg"  >
								Xóa 
								</a>
								</div>
							</div>
								 
							</fieldset>
							<?php endforeach ?>
						</form>
					</div>

			</div>
		</div>
	</div>
	<script>
	</script>
</body>
</html>