@extends('layout')

@section('content')
<button><a href="{{route('get.book')}}">Create</a></button><br>
<button><a href="{{route('book.list')}}">Show</a></button><br>

@endsection  
@section('script')
<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endsection

