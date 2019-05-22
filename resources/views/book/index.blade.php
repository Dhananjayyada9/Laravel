@extends('layout')

@section('content')
<table border="1" >
	@foreach($books as  $bookk)
	<tr>
	  <td>{{$bookk->name}}</td>
	  <td>{{$bookk->author}}</td>
	  <td>{{$bookk->price}}</td>
		
	</tr>
    @endforeach
</table>
@endsection