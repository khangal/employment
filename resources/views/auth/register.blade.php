<!-- resources/views/auth/register.blade.php -->

@extends('layouts.master')

@section('title', 'Бүртгүүлэх')

@section('content')
<form method="POST" action="/register">
    {!! csrf_field() !!}
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    
    <div>
        Re-enter email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
@endsection