

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

	<form method="POST" action="{{!empty($member->id) ? url('edit_member') : url('member')}}">
    {{ csrf_field() }}
    	<input type="hidden" name="id" value="{{ !empty($member->id) ? $member->id : '' }}">
		nama<input type="text" name="name" value="{{ !empty($member->name) ? $member->name : '' }}"><br>
		email<input type="text" name="email" value="{{ !empty($member->email) ? $member->email : '' }}"><br>
		password<input type="text" name="password" value="{{ !empty($member->password) ? $member->password : '' }}"><br>
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
			@if ($users)
				@foreach ($users as $key => $value)
					<tr>
						<td>{{$value->name}}</td>
						<td>{{$value->email}}</td>
						<td>{{$value->password}}</td>
						<td><a href="{{url('delete/'.$value->id)}}">Delete</a> |<a href="{{url("edit_member/$value->id")}}">Edit</a>  </td>
						
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>
	<form method="POST" action="{{ url('log_out')}}">
		{{csrf_field()}}
		<input type="submit" value="Log Out"><br>
	</form>
</body>
</html>