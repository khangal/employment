@extends('layouts.master')

@section('title', 'Ажил хайх')

@section('content')
	<h1>JOBS</h1>
	
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