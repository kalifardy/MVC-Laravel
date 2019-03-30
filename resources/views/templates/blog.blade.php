@extends('templates.index')
@section('content')


@if(count($blogs))

<h4>List data</h4>

	<ul>
		@foreach($blogs as $blog)

		<li><a href= "{{url('blog',$blog->id)}}">Nama = {{ $blog->nama }}</a></li>

		@endforeach
	</ul>
@else

<p>Post Not Found</p>

@endif

@stop