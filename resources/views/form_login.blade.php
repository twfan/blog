<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form method="POST" action="{{url('proses_login')}}">
		{{ csrf_field() }}
		email : <input type="text" name="email"><br>
		password : <input type="text" name="password"><br>
		<input type="submit" value='Login'><a href="{{url('register')}}"><input type="button" value='Register'></a>
		@if (session('status'))
		{{session('status')}}
		@endif
	</form>
</body>
</html>