{{-- filepath: resources/views/auth/reset-password.blade.php --}}
@extends('auth.layout')

@section('title', 'Restablecer contraseña - Solo Chifles')
@section('header', 'Restablece tu contraseña')
@section('subheader', 'Ingresa tu nueva contraseña')

@section('content')
<form method="POST" action="{{ route('password.store') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Nueva contraseña</label>
        <input id="password" class="form-control" type="password" name="password" required>
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-login">Restablecer contraseña</button>
</form>
@endsection