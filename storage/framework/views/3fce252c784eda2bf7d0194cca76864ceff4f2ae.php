<html>
<head>
	<title>Register Form</title>
</head>
<body>
	<form method="POST" action="<?php echo e(url('proses_register')); ?>">
		<?php echo e(csrf_field()); ?>

		name : <input type="text" name="name"><br>
		email : <input type="text" name="email"><br>
		password : <input type="text" name="password"><br>
		Admin<input type="radio" name="permission" value="1">
		Dosen<input type="radio" name="permission" value="2">
		Mahasiswa<input type="radio" name="permission" value="3"><br>
		<input type="submit" value='Register'>
		<?php if(session('status')): ?>
		<?php echo e(session('status')); ?>

		<?php endif; ?>
	</form>
</body>
</html>