@extends('layout')

@section('content')
<form action="{{route('book.post')}}" method="post">
	{{csrf_field()}}
	

	<div>Name<input type="text" name="name" value={{old('name')}}>
	@if($errors->has('name'))
	{{$errors->first('name')}}
	@endif<div>
	<div>Author<input type="text" name="author" value={{old('author')}}>
     @if($errors->has('author'))
	{{$errors->first('author')}}
	@endif
	</div>
	<div>Price<input type="text" name="price" value={{old('price')}}>
    @if($errors->has('price'))
	{{$errors->first('price')}}
	@endif
	</div>
	<input type="submit" name="">
</form>
@endsection