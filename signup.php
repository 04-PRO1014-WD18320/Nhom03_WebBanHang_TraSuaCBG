<!doctype html>
<html lang="en">
  <head>
  	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Milk Tea CBG</h2>
				</div>
			</div>
			<div class="row justify-content-center">
			<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Chào Mừng Đăng Ký</h2>
								<p>Đã  có tài Khoản?</p>
								<a href="index.php?act=dangnhap" class="btn btn-white btn-outline-white">Đăng Nhập</a>
							</div>
			      </div>

						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Đăng Ký</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					<?php 
						if(isset($notice) && ($notice!= "")){
							echo $notice;
						}
					?>
							<form method="post" action="index.php?act=dangky" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Tên Đăng Nhập </label>
			      			<input name="user" type="text" class="form-control" placeholder="Tên Đăng Nhập" >
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Mật Khẩu</label>
		              <input type="text" name="password" class="form-control" placeholder="Mật Khẩu" >
		            </div>
                    
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email </label>
			      			<input type="text" name="email" class="form-control" placeholder="Email" >
			      		</div>
		            <div class="form-group">
                   <input  name="dangky" type="submit"  class="form-control btn btn-primary submit px-3" value="Đăng Ký">
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
