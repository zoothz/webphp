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
            <div class="col-sm-6">
                <div class="jumbotron jumbotron-fluid text-xs-center">
					<div class="container">
					    <h1 class="display-5">Thêm pizza</h1><br>
							<br>
							<br>
							<br>
							<br>
				</div>
                <form action="<?= base_url(); ?>admin/themmoipizza" method="post" enctype="multipart/form-data">		
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
						<input name="anhpizza" type="file" class="form-control" placeholder="Ảnh">
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
									if(empty($value['anhpizza'])){
								 ?>
									<img class="card-img-top img-fluid" src="http://fpoimg.com/300x300?text=Advertisement" alt="Card image cap">
								 <?php }
								 else { ?>
									<img class="card-img-top img-fluid" src="<?= $value['anhpizza'] ?>" alt="Card image cap">
									<?php } ?>
									<div class="card-block">
										<p class="card-title"><?= $value['ten'] ?></p>
                      <a href="<?= base_url(); ?>admin/suapizza/<?= $value['id'] ?>" class="btn btn-outline-success sua"><i class="fa fa-pencil"></i></a>
                      <a data-href="<?= $value['id'] ?>" class="nutxoa btn btn-warning"> <i class="fa fa-remove"></i></a>
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
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script> 
    	$(function(){
        $('body').on('click', '.nutxoa', function(event) {
 			/* Act on the event */
       var duongdan = '<?php echo base_url() ;?>' ; 
        id = $(this).data('href');
        doituongcanxoa = $(this).parent().parent().parent();
        $.ajax({
            url: duongdan + '/admin/xoapizza/'+id,
            type: 'POST',
            dataType: 'json'
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
            // dung jquery , xoa luôn phân tử , đỡ phải load lại 
            //	$(this).parent().parent().parent().remove();
              doituongcanxoa.remove();
          });
 		}); 
  })
 	</script>
</body>
</html>