@extends('layouts.master')

@section('title', 'Ажлын байр зарлах')

@section('content')

	<form method="POST" action="{{ url('jobs') }}">
		{!! csrf_field() !!}
	
		<legend>Шинэ ажлын байр зарлах</legend>
		
		<div class="form-group">
			<label for="company">Компани: *</label>
			<input class="form-control" required="true" name="company" type="text" id="company">
		</div>
		
		<div class="form-group">
			<label for="title">Мэргэжил: *</label>
			<input class="form-control" placeholder="Тогооч, нягтлан бодогч, эмч ..." required="true" name="title" type="text" id="title">
		</div>
		
		<div class="form-group">
			<label class="control-label">Төрөл *</label>
			<div>
				<select class="form-control" name="type" required>
					@foreach ($types as $type)
						<option value="{{ $type->id }}">{{ $type->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="salary">Цалин төгрөгөөр: </label>
			<input class="form-control" required="true" name="salary" type="number">
		</div>
		
		<div class="form-group">
			<label for="description">Тайлбар:</label>
			<textarea class="form-control" required="true" name="description" cols="50" rows="10" id="description"></textarea>
		</div>
		
		<div class="form-group">
			<input class="btn btn-primary form-control" type="submit" value="Үүсгэх">
		</div>
		
	</form>
	
@endsection