{{-- filepath: resources/views/auth/confirm-password.blade.php --}}
@extends('auth.layout')

@section('title', 'Confirmar contraseña - Solo Chifles')
@section('header', 'Confirma tu contraseña')
@section('subheader', 'Por seguridad, ingresa tu contraseña para continuar')

@section('content')
<form method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input id="password" class="form-control" type="password" name="password" required autofocus>
    </div>
    <button type="submit" class="btn btn-login">Confirmar</button>
</form>
@endsection