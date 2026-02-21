@extends('layouts.app')

@section('title', 'Системээс гарлаа')

@section('content')
<section class="hero-panel">
    <img src="/images/naadam-hero.svg" alt="Монгол наадмын зураг" class="hero-image">
    <div class="hero-content">
        <h2>Та системээс амжилттай гарлаа</h2>
        <p>Монгол наадмын оролцогчдын цол, эрэмбийг дахин харах бол нүүр хуудас руу орно уу.</p>
        <div class="tabs">
            <a class="tab" href="{{ route('home') }}">Нүүр хуудас руу буцах</a>
            <a class="tab" href="{{ route('login') }}">Дахин нэвтрэх</a>
        </div>
    </div>
</section>
@endsection
