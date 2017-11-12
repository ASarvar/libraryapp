@extends('layouts.user')

@section('content')

    <div class="row">
    	@include('includes.search')
    </div>
    <div class="row">
    	@if($book)
    	<div class="col-sm-4">
			<img src="{{$book->photo ? $book->photo->file : 'http://placehold.it/400x500'}}" alt="" class="img-responsive img-rounded" >
		</div>
		<div class="col-sm-8">
    		<ul><b>Book Id:</b>	 {{$book->book_id}}</ul>
    		<ul>{{$book->book_author}}</ul>
    		<ul>{{$book->book_name}}</ul>
    		<ul>{{$book->book_published_at}}</ul>
    	</div>
    	@endif
	</div>

@endsection