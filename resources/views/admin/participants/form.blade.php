@extends('layouts.app')

@section('content')
<h2>{{ $participant->exists ? 'Оролцогч засах' : 'Оролцогч нэмэх' }}</h2>
<form method="post" action="{{ $participant->exists ? route('admin.participants.update', $participant) : route('admin.participants.store') }}" class="form">
    @csrf
    @if($participant->exists) @method('PUT') @endif
    <label>Спорт төрөл
        <select name="sport_id">
            @foreach($sports as $sport)
            <option value="{{ $sport->id }}" @selected(old('sport_id', $participant->sport_id) == $sport->id)>{{ $sport->name }}</option>
            @endforeach
        </select>
    </label>
    <label>Нэр<input name="name" value="{{ old('name', $participant->name) }}"></label>
    <label>Цол<input name="title" value="{{ old('title', $participant->title) }}"></label>
    <label>Эрэмбэ<input type="number" name="rank" value="{{ old('rank', $participant->rank ?? 1) }}"></label>
    <label>Медаль
        <select name="medal">
            @foreach(['gold'=>'Алтан','silver'=>'Мөнгөн','bronze'=>'Хүрэл'] as $value => $label)
            <option value="{{ $value }}" @selected(old('medal', $participant->medal) == $value)>{{ $label }}</option>
            @endforeach
        </select>
    </label>
    <button type="submit">Хадгалах</button>
</form>
@endsection
