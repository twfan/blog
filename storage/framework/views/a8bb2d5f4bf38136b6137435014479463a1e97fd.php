

<html>
<head>
	<title>Tambah data member</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document.ready(function(){
	
}));
</script>
</head>
<body>

	<form method="POST" action="<?php echo e(!empty($member->id) ? url('edit_member') : url('member')); ?>">
    <?php echo e(csrf_field()); ?>

    	<input type="hidden" name="id" value="<?php echo e(!empty($member->id) ? $member->id : ''); ?>">
		nama<input type="text" name="name" value="<?php echo e(!empty($member->name) ? $member->name : ''); ?>"><br>
		email<input type="text" name="email" value="<?php echo e(!empty($member->email) ? $member->email : ''); ?>"><br>
		password<input type="text" name="password" value="<?php echo e(!empty($member->password) ? $member->password : ''); ?>"><br>
		<input type="submit" value="add"><br>
	</form>
	<table>
		<thead>
			<tr>
				<td>nama</td>
				<td>email</td>
				<td>password</td>
				<td>action</td>	
			</tr>
		</thead>
		<tbody>
			<?php if($users): ?>
				<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($value->name); ?></td>
						<td><?php echo e($value->email); ?></td>
						<td><?php echo e($value->password); ?></td>
						<td><a href="<?php echo e(url('delete/'.$value->id)); ?>">Delete</a> |<a href="<?php echo e(url("edit_member/$value->id")); ?>">Edit</a>  </td>
						
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</tbody>
	</table>
	<form method="POST" action="<?php echo e(url('log_out')); ?>">
		<?php echo e(csrf_field()); ?>

		<input type="submit" value="Log Out"><br>
	</form>
</body>
</html>