<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/flag-icon.png" />
    <title>Inglês ADM - Nova conta</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Cloudflare -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" href="../../css/style.css">

	
</head>
<body>

		<div class="card">
		    
		    
			<div class="card-header">
				<h3>Sign up</h3>

			</div>
			
			
			<div class="card-body">
				<form action="pages/usuario/validate.php" method="post">
                    
                    <!-- Username -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="usu_login" class="form-control" placeholder="username">
					</div>

                    <!-- E-mail address -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="usu_login" class="form-control" placeholder="e-mail address">
					</div>

                    <!-- Phone number -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="usu_login" class="form-control" placeholder="phone number">
					</div>
					
                    <!-- Password -->
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="usu_senha" class="form-control" placeholder="password">
					</div>

                    <!-- Confirm Password -->
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="usu_senha" class="form-control" placeholder="confirm password">
					</div>

					<div class="form-group">
						<input type="submit" value="Register" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
			
			<!-- Footer -->
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					You'll be sent an e-mail to confirm your account. Check the spam folder.
				</div>
			</div>


		</div> <!-- CARD END -->


</body>
</html>