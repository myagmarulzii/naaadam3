@extends('layouts.app')

@section('content')
<h2>{{ $sport->exists ? 'Төрөл засах' : 'Төрөл нэмэх' }}</h2>
<form method="post" action="{{ $sport->exists ? route('admin.sports.update', $sport) : route('admin.sports.store') }}" class="form">
    @csrf
    @if($sport->exists) @method('PUT') @endif
    <label>Нэр<input name="name" value="{{ old('name', $sport->name) }}"></label>
    <label>Slug<input name="slug" value="{{ old('slug', $sport->slug) }}"></label>
    <label>Icon<input name="icon" value="{{ old('icon', $sport->icon) }}"></label>
    <label>Тайлбар<textarea name="description">{{ old('description', $sport->description) }}</textarea></label>
    <button type="submit">Хадгалах</button>
</form>
@endsection
