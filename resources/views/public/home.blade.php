@extends('layouts.app')

@section('title', 'Наадмын эрэмбэ')

@section('content')
<section class="stats">
    <div class="card"><h3>Алтан медаль</h3><p>{{ $medals['gold'] }}</p></div>
    <div class="card"><h3>Мөнгөн медаль</h3><p>{{ $medals['silver'] }}</p></div>
    <div class="card"><h3>Хүрэл медаль</h3><p>{{ $medals['bronze'] }}</p></div>
</section>

<section class="tabs">
    @foreach($sports as $sport)
        <a class="tab" href="{{ route('sport.show', $sport->slug) }}">{{ $sport->icon }} {{ $sport->name }} ({{ $sport->participants_count }})</a>
    @endforeach
</section>

<section class="grid">
    @foreach($topParticipants as $participant)
    <article class="participant-card">
        <h4>{{ $participant->name }}</h4>
        <p>{{ $participant->title }} · #{{ $participant->rank }}</p>
        <p>{{ $participant->sport->icon }} {{ $participant->sport->name }}</p>
        <p>Нутгийн харьяалал: {{ $participant->hometown ?? 'Тодорхойгүй' }}</p>
    </article>
    @endforeach
</section>
@endsection
