@extends('layouts.master')

@section('title', 'Миний мэдээлэл')

@section('content')
	<div class="row">
		<h3>{{ $profile->lastname }} {{ $profile->firstname}}<h3>
	</div>
	<div class="row">
		<h4>Ажлын туршлага</h4>
	</div>
	<div class="row">
		<h4>Боловсрол</h4>
	</div>
@endsection