@extends('layouts.user')

@section('content')

    <div class="row">
    	@include('includes.search')
    </div>
    <div class="row">
    	<div class="col-sm-4">
			<img src="{{$book->photo ? $book->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded" >
		</div>
		<div class="col-sm-8">
    		<ul><b>Book Id:</b>	 {{$book->book_id}}</ul>
    		<ul>{{$book->book_author}}</ul>
    		<ul>{{$book->book_name}}</ul>
    		<ul>{{$book->book_published_at}}</ul>
            @if (($order)->isEmpty())
    			<td><a href="{{route('book.order', $book->id)}}"><button type="button" class=" btn btn-primary">Order</button></a></td>
    		@else
    			<td><a href="{{route('book.order', $book->id)}}"><button type="button" class=" btn btn-primary">UnOrder</button></a></td>
    		@endif    			
    	</div>
	</div>

@endsection
