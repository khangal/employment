@extends('layouts.master')

@section('title', 'Ажил хайх')

@section('content')
	<form method="GET" action="#boom">
		<div class="row">
			<div class="input-group">
			<input type="text" class="form-control" placeholder="Ажлын нэр, компаны нэр гэх мэт ...">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">Хайх</button>
			</span>
			</div><!-- /input-group -->
		</div>
	</form>
	
	@foreach ($jobs as $job)
		<div class="row">
			<h3>
				<a href="{{ url('/jobs', $job->id) }}">{{ $job->title }}</a>
			</h3>
			<div>
				Company : {{ $job->company }}
			</div>
		</div>
	@endforeach
@endsection