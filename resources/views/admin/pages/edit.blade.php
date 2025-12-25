{{-- filepath: resources/views/admin/pages/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Editar {{ ucfirst($page->slug) }}</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('admin.pages.update', $page->slug) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea name="content" id="content" rows="10" class="form-control">{{ old('content', $page->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar cambios</button>
    </form>
</div>
@endsection