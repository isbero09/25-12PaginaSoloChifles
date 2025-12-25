{{-- filepath: resources/views/auth/forgot-password.blade.php --}}
@extends('auth.layout')

@section('title', 'Recuperar contraseña - Solo Chifles')
@section('header', '¿Olvidaste tu contraseña?')
@section('subheader', 'Ingresa tu correo para recibir un enlace de recuperación')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input id="email" class="form-control" type="email" name="email" required autofocus>
    </div>
    <button type="submit" class="btn btn-login">Enviar enlace</button>
</form>
<div class="login-footer">
    <p><a href="{{ route('login') }}">Volver al inicio de sesión</a></p>
</div>
@endsection