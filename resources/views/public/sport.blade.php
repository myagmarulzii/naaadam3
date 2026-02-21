@extends('layouts.app')

@section('title', $sport->name)

@section('content')
<h2>{{ $sport->icon }} {{ $sport->name }}</h2>
<p>{{ $sport->description }}</p>

<div class="grid">
    @foreach($participants as $participant)
    <article class="participant-card">
        <h4>#{{ $participant->rank }} {{ $participant->name }}</h4>
        <p>Цол: {{ $participant->title }}</p>
        <p>Медаль: {{ $participant->medal }}</p>
        @if($participant->wins)
            <p>Ялалт: {{ $participant->wins }}</p>
        @endif
        @if($participant->score)
            <p>Оноо: {{ $participant->score }}</p>
        @endif
        @if($participant->finish_time)
            <p>Хугацаа: {{ $participant->finish_time }}</p>
        @endif
    </article>
    @endforeach
</div>
@endsection
