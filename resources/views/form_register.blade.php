<html>
<head>
	<title>Register Form</title>
</head>
<body>
	<form method="POST" action="{{url('proses_register')}}">
		{{ csrf_field() }}
		name : <input type="text" name="name"><br>
		email : <input type="text" name="email"><br>
		password : <input type="text" name="password"><br>
		Admin<input type="radio" name="permission" value="1">
		Dosen<input type="radio" name="permission" value="2">
		Mahasiswa<input type="radio" name="permission" value="3"><br>
		<input type="submit" value='Register'>
		@if (session('status'))
		{{session('status')}}
		@endif
	</form>
</body>
</html>