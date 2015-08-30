@extends('layouts.master')

@section('title', 'Ажил хайх')

@section('content')
	<div class="row">
		<h2>{{$job->title}}</h2>
		<br> Компани {{ $job->company }}
		<br> Төрөл {{ $job->type->name}}
		<br> Цалин {{ $job->salary }}₮
		<p> Тайлбар {{ $job->description }}</p>
	</div>
@endsection