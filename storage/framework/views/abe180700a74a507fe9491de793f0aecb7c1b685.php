<html>
<head>
	<title>Tambah data product</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document.ready(function(){
	
}));
</script>
</head>
<body>

	<form method="POST" action="<?php echo e(url('proses_products')); ?>">
    <?php echo e(csrf_field()); ?>

    	<input type="hidden" name="id" value="">
		nama produk<input type="text" name="name" value=""><br>
		deskripsi produk<input type="description" name="description" value=""><br>
		harga<input type="number" name="price" value=""><br>
		<input type="submit" value="Add Products"><br>
	</form>	
	<?php if(session('status')): ?>
        <?php echo e(session('status')); ?>

	<?php endif; ?>
</body>
</html>