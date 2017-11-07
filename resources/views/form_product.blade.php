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

	<form method="POST" action="{{url('proses_products')}}">
    {{ csrf_field() }}
    	<input type="hidden" name="id" value="">
		nama produk<input type="text" name="name" value=""><br>
		deskripsi produk<input type="description" name="description" value=""><br>
		harga<input type="number" name="price" value=""><br>
		<input type="submit" value="Add Products"><br>
	</form>	
	@if (session('status'))
        {{ session('status') }}
	@endif
</body>
</html>