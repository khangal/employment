<!-- resources/views/auth/register.blade.php -->

@extends('layouts.master')

@section('title', 'Бүртгүүлэх')

@section('content')
<!--<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form method="POST" action="/register">
            {!! csrf_field() !!}
            <h3>Шинээр бүртгэл үүсгэх</h3>
            <input name="email" type="email" class="form-control" placeholder="Е-майл хаяг" required autofocus>
            <input name="email" type="check-email" class="form-control" placeholder="Ахиад Е-майл хаяг " required>
            <input name="password" type="password" class="form-control" placeholder="Нууц үг" required>
            <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Санах
            </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Бүртгүүлэх</button>
        </form>
    </div>
</div>-->

<form method="POST" action="/register">
    {!! csrf_field() !!}
    <div>
        Email
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