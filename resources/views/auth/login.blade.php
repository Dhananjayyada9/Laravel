


@extends('layout')
@section('content')
<h3>Login Page</h3>
<form action="{{route('post.login')}}" method="post">
	{{csrf_field()}}
	<table>
		<tr><td><input type="email" name="email"></td></tr>
        <tr><td><input type="password" name="password"></td></tr>
		<tr><td><input type="submit" ></td></tr>
	</table>
</form>

@endsection
@section('script')
<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endsection
