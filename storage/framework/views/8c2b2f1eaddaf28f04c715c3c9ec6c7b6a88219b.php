<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form method="POST" action="<?php echo e(url('proses_login')); ?>">
		<?php echo e(csrf_field()); ?>

		email : <input type="text" name="email"><br>
		password : <input type="text" name="password"><br>
		<input type="submit" value='Login'><a href="<?php echo e(url('register')); ?>"><input type="button" value='Register'></a>
		<?php if(session('status')): ?>
		<?php echo e(session('status')); ?>

		<?php endif; ?>
	</form>
</body>
</html>