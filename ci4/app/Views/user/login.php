<!DOCTYPE html> 
<html lang="en"> 
<head>     
	<meta charset="UTF-8">     
	<title>Login</title>     
	<link rel="stylesheet" type="text/css" href="<?= base_url('/login.css');?>">
</head> 
<body>     
	<div id="login-wrapper">             
		<h1>Halaman Login</h1>             
		<?php if(session()->getFlashdata('flash_msg')):?>                 
		<div class="alert alert-danger">
			<?= session()->getFlashdata('flash_msg') ?>
		</div>             
	<?php endif;?>             
	<form class="login" action="" method="post">
		<h3>Silahkan login</h3>                 
		<div class="mb-3">                     
			<label for="InputForEmail" class="form-label">Email address</label>                     
			<input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">                 
		</div>
		<div class="mb-3">                    
			<label for="InputForPassword" class="form-label">Password</label>                     
			<input type="password" name="password" class="form-control" id="InputForPassword">                 
		</div>                 
		<button type="submit" class="login1">Login</button>             
	</form>     
</div> 
</body> 
</html>