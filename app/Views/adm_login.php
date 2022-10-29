<!doctype html>
<html lang="en">
  <head>
  	<title><?= $title;?></title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="144x144" href="<?= base_url('temp_users')?>/favicon-96x96.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url('temp_adm') ?>/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4 text-center">Bagasta Arsindo</h3>
		      		</div>
		      	</div>
					<form action="#" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group d-flex align-items-center">
	            	
					<div class="w-100 d-flex justify-content-center">
		            	<button type="submit" class="btn btn-block btn-sm btn-primary rounded submit">Masuk</button>
	            	</div>
	            </div>
	          </form>
              <a href="<?= base_url('') ?>" class="btn btn-block btn-sm btn-info rounded submit">Back to Home</a>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('temp_adm') ?>/js/jquery.min.js"></script>
  <script src="<?= base_url('temp_adm') ?>/js/popper.js"></script>
  <script src="<?= base_url('temp_adm') ?>/js/bootstrap.min.js"></script>
  <script src="<?= base_url('temp_adm') ?>/js/main.js"></script>

	</body>
</html>

