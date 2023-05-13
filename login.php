
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
	<section class="h-100 ">
		<div class="container h-100">
			<div class="row  justify-content-sm-center h-100 my-5">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form action="proses_login.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<input id="useremail" type="text" class="form-control" name="user_email" placeholder="Email" value="" required autofocus>
								</div>

								<div class="mb-3">
									<input id="userpassword" type="password" class="form-control" name="user_password" placeholder="Password" required>
								</div>

								<div class="text-center">
									<button id="login" name="login" type="submit" class="btn btn-primary ms-auto">
										Login 
									</button>
								</div>
							</form>
						</div>

						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="form.php" class="text-dark">Register</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; Meisya Rahmasari | FSWD 2
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>