<!-- resources/views/auth/login.blade.php -->

@extends('layouts.master')

@section('title', 'Нэвтрэх')

@section('content')
<form method="POST" action="/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
@endsection