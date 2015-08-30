<!-- resources/views/auth/login.blade.php -->

@extends('layouts.master')

@section('title', 'Нэвтрэх')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form method="POST" action="/login">
            {!! csrf_field() !!}
            <h3>Хуучин бүртгэлээр нэвтрэх</h3>
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Е-майл хаяг" required autofocus>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Нууц үг" required>
            <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Санах
            </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Нэвтрэх</button>
        </form>
    </div>
</div>
@endsection