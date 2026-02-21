@extends('layouts.app')

@section('title', 'Админ самбар')

@section('content')
<h2>Админ самбар</h2>
<section class="stats">
    <div class="card"><h3>Нийт гишүүн</h3><p>{{ $members }}</p></div>
    <div class="card"><h3>Оролцогч</h3><p>{{ $participants }}</p></div>
    <div class="card"><h3>Спорт төрөл</h3><p>{{ $sports }}</p></div>
</section>
<div class="tabs">
    <a class="tab" href="{{ route('admin.participants.index') }}">Оролцогч удирдах</a>
    <a class="tab" href="{{ route('admin.sports.index') }}">Төрөл удирдах</a>
</div>
@endsection
