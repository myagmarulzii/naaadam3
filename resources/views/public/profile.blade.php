@extends('layouts.app')

@section('title', 'Миний профайл')

@section('content')
<h2>Миний профайл</h2>
<form method="post" action="{{ route('profile.update') }}" class="form">
    @csrf
    @method('PUT')
    <label>Нэр<input type="text" name="name" value="{{ old('name', $user->name) }}"></label>
    <label>Аймаг<input type="text" name="aimag" value="{{ old('aimag', $user->aimag) }}"></label>
    <label>Зураг URL<input type="url" name="avatar_url" value="{{ old('avatar_url', $user->avatar_url) }}"></label>
    <label>Шинэ нууц үг<input type="password" name="password"></label>
    <label>Нууц үг давтах<input type="password" name="password_confirmation"></label>
    <button type="submit">Хадгалах</button>
</form>
@endsection
