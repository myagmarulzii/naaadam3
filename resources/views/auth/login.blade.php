@extends('layouts.app')

@section('title', 'Нэвтрэх')

@section('content')
<form method="post" action="{{ route('login.store') }}" class="form">
    @csrf
    <h2>Гишүүнээр нэвтрэх</h2>
    <label>Имэйл<input type="email" name="email" required></label>
    <label>Нууц үг<input type="password" name="password" required></label>
    <label><input type="checkbox" name="remember" value="1"> Намайг сана</label>
    <button type="submit">Нэвтрэх</button>
</form>
@endsection
