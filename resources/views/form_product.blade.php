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

	<form method="POST" action="{{url('proses_daftar_buku')}}">
    {{ csrf_field() }}
    	<input type="hidden" name="id" value="">
		judul buku<input type="text" name="judul" value=""><br>
		pengarang buku<input type="text" name="pengarang" value=""><br>
		penulis buku<input type="text" name="penulis" value=""><br>
		Stock<input type="number" name="stock" value="" min="0" max="500"><br>
		<input type="submit" value="Daftar Buku">
	</form>
	<a href="{{url('home')}}"><input type="submit" value="Back to menu"></a><br>

	@if (session('status'))
        {{ session('status') }}
	@endif
</body>
</html>